<?php
require('DB.php');

$masach = $_POST['masach'];
$maso = $_POST['maso'];
$masach = json_decode($masach,true);

for($i = 0; $i< count($masach); $i++){
    $ms = $masach[$i];
    $query =" INSERT INTO `lich_su`(`ls_ngaymuon`, `ls_ngayhethan`, `ls_trangthai`, `sv_maso`,`s_masach`) VALUES(Curdate(),DATE(curdate()+INTERVAL 7 DAY),0,'$maso',$ms);";
    $query1 = "UPDATE `sach` SET `s_soluong`= `s_soluong`-1 WHERE `s_masach` = '$ms' ";

    if(!mysqli_query($connect,$query)){   
        mysqli_query($connect,$query1);
        echo "fail";
        return;
    }
   
       
     
}     
echo count($masach);

?>