<?php
    // $connect = mysqli_connect("localhost","root","","sach");
    // mysqli_query($connect, "SET NAMES 'utf8");

    require('DB.php');

    $query = "SELECT * From sach LEFT JOIN vi_tri ON sach.vt_id = vi_tri.vt_id";

    $data = mysqli_query($connect,$query);

    $mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        //array_push($mangSach, new Sach($row['maso'], $row['ten'], $row['url']));

        $mangSach[] = array('maso' => $row['s_masach'], 'ten'=>$row['s_tensach'], 'url'=>$row['s_hinh'], 'soluong'=>$row['s_soluong'], 'tacgia'=>$row['s_tacgia'], 'nhaxuatban'=>$row['s_nhaxuatban'],'namxuatban'=>$row['s_namxuatban'], 'noidung'=>$row['s_noidung'],'loaisach'=>$row['loaisach'], 'vitri'=>$row['tenvitri']);
    }
    echo json_encode($mangSach);


?>