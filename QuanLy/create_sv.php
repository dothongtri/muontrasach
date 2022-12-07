<?php
    
    require('DB.php');

    $maso = $_POST['maso_sv'];
    $ten = $_POST['ten_sv'];
    $mk = $_POST['mk_sv'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];

    $query = "INSERT into sinh_vien VALUES('$maso','$ten','$mk','$sdt','$diachi');";
    
    
    if(mysqli_query($connect,$query)){
        echo "success";
    }
    else {
        echo "fail";
    }

?>