<?php
    require('DB.php');


    $ls_id  = $_POST['ls_id'];
    $query = "SELECT `ls_ngayhethan`-`ls_ngaymuon` as ngay FROM `lich_su` WHERE `ls_id` = $ls_id;";
    $row = mysqli_fetch_array(mysqli_query($connect,$query));

    

    $ngay = $row['ngay'];

    if($ngay <=7){
        $query1 ="UPDATE `lich_su` SET `ls_ngayhethan`= DATE_ADD(`ls_ngayhethan`, INTERVAL 7 DAY) WHERE  `ls_id`= $ls_id;";  
        mysqli_query($connect,$query1);
        echo "success";
    }
    else {
        echo "fail";
    }

   
    
?>