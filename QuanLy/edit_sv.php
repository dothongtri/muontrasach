<?php
    require('DB.php');
    
    $maso = $_POST['mssv'];
    $ten = $_POST['tensv'];
    $mk = $_POST['mk'];
    $sdt = $_POST['sodienthoai'];
    $diachi = $_POST['diachi'];

    $query1 = "UPDATE sinh_vien SET sv_ten = '$ten', sv_matkhau = '$mk', sv_sodienthoai='$sdt', sv_diachi='$diachi' where sv_maso = '$maso';";

    if(mysqli_query($connect,$query1)){
        echo "sussecc";
    }
    else {
        echo "Fail";
    }

?>