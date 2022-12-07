<?php

require('DB.php');
$tenke = $_POST['tenke'];
$query = "INSERT INTO `vi_tri`( `tenvitri`) VALUES ('$tenke')";

if(mysqli_query($connect,$query)){
    echo "success";
}else echo "fail";
?>