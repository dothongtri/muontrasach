<?php
    require('DB.php');
    $maso = $_POST['maso_sach'];
   
    $query = "SELECT * FROM sach where s_masach = '$maso';";
    
    $idDel = mysqli_fetch_array(mysqli_query($connect,$query));
   
    $upload_dir = __DIR__ . "/Images/";
    
    //$filename="IMG".rand().".jpg";
   


    $old_file = $upload_dir . $idDel['s_hinh'];
    if (file_exists($old_file)) {
        unlink($old_file);
    }
    
    $query1 = "DELETE FROM sach where s_masach = '$maso';";

    mysqli_query($connect,$query1);


    if(mysqli_query($connect,$query)){
        echo "sussecc";
    }
    else {
        echo "Fail";
    }

?>