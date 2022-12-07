<?php
    require("DB.php");
    $id = $_POST['id'];
    $masach = $_POST['masach'];


    $query = "SELECT s_masach FROM `lich_su` WHERE `ls_id`=$id";
    $result = mysqli_query($connect,$query);
    $row  = mysqli_fetch_assoc($result);
    if($row['s_masach']==$masach){
        echo "success";
    }
    else
        echo "fail";

   

?>