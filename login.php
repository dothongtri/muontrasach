<?php
   
   require('DB.php');

    $maso = $_POST['maso'];
    $matkhau = $_POST['matkhau'];

    if(substr($maso,0,1) == "B"){
        $query = "SELECT * FROM sinh_vien WHERE sv_maso = '$maso' AND sv_matkhau = '$matkhau'";
        $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0)
            echo "true";
        else 
            echo "false";
    }
    else if(substr($maso,0,1) == "Q") {
        $query = "SELECT * FROM quan_ly WHERE ql_maso = '$maso' AND ql_matkhau = '$matkhau'";
        $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0)
            echo "true";
        else 
            echo "false";
    }
?>