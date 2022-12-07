<?php
require 'image.compare.class.php';
require('autocrop.php');
  require("DB.php");
  $id = $_POST['id'];
  $masach = $_POST['masach'];
   $url = $_POST['sach'];
  $upload_dir = __DIR__ . "\\Sach\\Images\\";
    
  $filename="TRA".rand().".jpg";


  file_put_contents($upload_dir.$filename,base64_decode($url));
  new AutoCrop($upload_dir.$filename);

$query = "SELECT s_hinh FROM sach WHERE s_masach=$masach";
$result = mysqli_query($connect,$query);
$row  = mysqli_fetch_assoc($result);
$img = __DIR__ . "\\Sach\\Images\\".$row['s_hinh'];



$class = new compareImages;
echo $class->compare($img,$upload_dir.$filename);
if($class->compare($img,$upload_dir.$filename)<=10){
  $query="UPDATE `lich_su` SET `ls_trangthai`=1, `ls_ngaytra`=curdate() WHERE `ls_id`=$id";
  $query1 = "UPDATE `sach` SET `s_soluong`= `s_soluong`+1 WHERE `s_masach` = '$masach' ";
  if(mysqli_query($connect,$query)){
      mysqli_query($connect,$query);
      echo "success";
  }
  else
      echo "fail";
  
}else echo 'fail';
// unlink($upload_dir.$filename);
?>