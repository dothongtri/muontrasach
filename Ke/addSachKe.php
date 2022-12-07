<?php
require('DB.php');
$idke = $_POST['make'];
$masach = $_POST['masach'];
$query="UPDATE `sach` SET `vt_id`=$idke WHERE `s_masach`= $masach";

if(mysqli_query($connect,$query)){
    echo "success";
}else echo "fail";

?>