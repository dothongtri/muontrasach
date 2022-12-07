<?php
    require("DB.php");
    
    $maso =$_POST['maso'];
    if(substr($maso,0,1) == "B"){
        $query = "SELECT * FROM sinh_vien WHERE sv_maso = '$maso'";
        $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0)
            echo "B";
        else 
            echo "false";
    }
    else if(substr($maso,0,1) == "Q") {
        $query = "SELECT * FROM quan_ly WHERE ql_maso = '$maso'";
        $result = mysqli_query($connect,$query);
    
        if(mysqli_num_rows($result) > 0)
            echo "Q";
        else 
            echo "false";
    }
    else{
        echo "false";
        
    } 
?>