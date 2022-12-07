<?php

require('DB.php');
$masach = $_POST['masach'];
$query="UPDATE `sach` SET `vt_id`=0 WHERE s_masach=$masach";
if(mysqli_query($connect,$query)){
    echo "success";
}else echo "fail";
?>