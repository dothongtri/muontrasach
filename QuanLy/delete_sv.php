<?php
    require('DB.php');
    $maso = $_POST['massv'];


    $query1 = "DELETE FROM `lich_su` WHERE `sv_maso`='$maso'";
    $query2 = "DELETE FROM sinh_vien where sv_maso = '$maso';";

    


    if(mysqli_query($connect,$query1) && mysqli_query($connect,$query2)){
        echo "sussecc";
    }
    else {
        echo "Fail";
    }

?>