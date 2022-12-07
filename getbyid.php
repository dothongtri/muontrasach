<?php
require("DB.php");

$masach = $_GET['masach'];
$maso = $_GET['maso'];

$query = "SELECT * FROM `lich_su` WHERE s_masach=$masach and sv_maso ='$maso' and ls_trangthai=0";
$data = mysqli_query($connect,$query);
$row  = mysqli_fetch_assoc($data);
$mangSach  = array();
if(mysqli_num_rows($data) >0){
    $mangSach[] = array('maso' => 'fail');
    echo json_encode($mangSach);
   return;
}
// echo json_encode($masach);
$query = "SELECT * From sach where s_masach = '$masach';";
$data = mysqli_query($connect,$query);


$row  = mysqli_fetch_assoc($data);
if(mysqli_num_rows($data) > 0){
    $mangSach[] = array('maso' => $row['s_masach'], 'ten'=>$row['s_tensach'], 'url'=>$row['s_hinh'], 'soluong'=>$row['s_soluong'], 'tacgia'=>$row['s_tacgia'], 'nhaxuatban'=>$row['s_nhaxuatban'],'namxuatban'=>$row['s_namxuatban'], 'noidung'=>$row['s_noidung']);
    echo json_encode($mangSach);
}
else{
    $mangSach[] = array('maso' => "null");
    echo json_encode($mangSach);
}


?>