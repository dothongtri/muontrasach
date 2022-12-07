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

    //import class
    require('C:\xampp\htdocs\DBandroid\autocrop.php');

    // $url = $_POST['url_sach'];
    // $path = "Image/".$url;
    // echo $path;
    // move_uploaded_file($url, $path);
    $query= "SELECT * FROM `sach` WHERE `s_masach` = $maso";
    $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0){
           $query= "UPDATE `sach` SET `s_soluong`= `s_soluong`+$soluong WHERE `s_masach` = '$maso' ";
           if(mysqli_query($connect,$query)){
            echo "success";
            }
            else {
                echo "fail";
            }
        }   
        else {
            $upload_dir = __DIR__ . "/Images/";
            $filename="IMG".rand().".jpg";
            file_put_contents($upload_dir.$filename,base64_decode($url));
            new AutoCrop($upload_dir.$filename);
            //echo  __DIR__."/Images".$filename;
            $query = "INSERT into sach VALUES('$maso','$ten','$filename', $soluong, '$tacgia', '$nhaxuatban', '$namxuatban', '$noidung',0,'$loaisach');";
            if(mysqli_query($connect,$query)){
                echo "success";
            }
            else {
                echo "fail";
            }
        }
           
 
    

?>