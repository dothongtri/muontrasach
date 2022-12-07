<?php
    require('DB.php');
    $id = $_POST['idke'];
    $query = "DELETE FROM `vi_tri` WHERE vt_id = $id";
    if(mysqli_query($connect,$query)){
        $query = "SELECT s_masach FROM `sach` WHERE vt_id = $id";
        $data = mysqli_query($connect,$query);
        while($row  = mysqli_fetch_assoc($data)){
            $masach = $row['s_masach'];
            $query = "UPDATE `sach` SET `vt_id`=0 WHERE s_masach =$masach";
            mysqli_query($connect,$query);   
        }
        echo "success";

    }
    else echo "fail";




?>