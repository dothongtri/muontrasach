<?php
    require('DB.php');
    
    $maso = $_POST['maso_sach'];
    $ten = $_POST['ten_sach'];
    $url = $_POST['url_sach'];
    $soluong = $_POST['soluong'];
    $tacgia = $_POST['tacgia'];
    $nhaxuatban = $_POST['nhaxuatban'];
    $namxuatban = $_POST['namxuatban'];
    $noidung = $_POST['noidung'];
    $loaisach = $_POST['loaisach'];
     
    $query = "SELECT * FROM sach where s_masach = '$maso';";
    $idDel = mysqli_fetch_array(mysqli_query($connect,$query));
   
    $upload_dir = __DIR__ . "/Images/";      
    $filename="IMG".rand().".jpg";
   
    //import class
    require('C:\xampp\htdocs\DBandroid\autocrop.php');
   
    
    file_put_contents($upload_dir.$filename,base64_decode($url));
    new AutoCrop($upload_dir.$filename);
     

    if($url != "null"){
        $old_file = $upload_dir . $idDel['s_hinh'];
         if (file_exists($old_file)) {
            unlink($old_file);
        }
        $query1 = "UPDATE sach SET s_tensach = '$ten', s_hinh = '$filename', s_soluong = $soluong, s_tacgia='$tacgia', s_nhaxuatban='$nhaxuatban', s_namxuatban='$namxuatban', s_noidung='$noidung', loaisach = '$loaisach' where s_masach = '$maso';";
    }
       
    else
        $query1 = "UPDATE sach SET s_tensach = '$ten' , s_soluong = $soluong, s_tacgia='$tacgia', s_nhaxuatban='$nhaxuatban', s_namxuatban='$namxuatban', s_noidung='$noidung' , loaisach = '$loaisach'  where s_masach = '$maso';";

    
    if(mysqli_query($connect,$query1)){
        echo "success";
    }
    else {
        echo "Fail";
    }
   
?>