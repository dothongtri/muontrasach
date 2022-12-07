<?php
    // $connect = mysqli_connect("localhost","root","","sach");
    // mysqli_query($connect, "SET NAMES 'utf8");

    require('DB.php');

    $maso = $_GET['sv_maso'];

    $query = "
    SELECT sinh_vien.sv_maso as maso, `sv_ten`,`sv_matkhau`,`sv_diachi`,`sv_sodienthoai`, coalesce(sum(lich_su.ls_trangthai = 1 ), 0) tra, coalesce(sum(lich_su.ls_trangthai = 0 ), 0) chuatra
    FROM sinh_vien, lich_su
    WHERE sinh_vien.sv_maso = lich_su.sv_maso 
    AND sinh_vien.sv_maso = '$maso'";

    $data = mysqli_query($connect,$query);

    $mangSach  = array();

    $row  = mysqli_fetch_assoc($data);
    mysqli_num_rows($data);
        //array_push($mangSach, new Sach($row['maso'], $row['ten'], $row['url']));

        $mangSach[] = array(
            'maso' => $row['maso'], 
            'ten'=>$row['sv_ten'], 
            'matkhau'=>$row['sv_matkhau'],
            'tra' => $row['tra'],
            'chuatra' => $row['chuatra'],
            'sodienthoai' => $row['sv_sodienthoai'],
            'diachi' => $row['sv_diachi']
        );
    
    echo json_encode($mangSach);



?>