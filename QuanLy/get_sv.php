<?php
    // $connect = mysqli_connect("localhost","root","","sach");
    // mysqli_query($connect, "SET NAMES 'utf8");

    require('DB.php');

    $query = " SELECT * from sinh_vien ";

    $data = mysqli_query($connect,$query);

    $mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        //array_push($mangSach, new Sach($row['maso'], $row['ten'], $row['url']));
      
       
            $mangSach[] = array(
                'maso' => $row['sv_maso'], 
                'ten'=>$row['sv_ten'], 
                'matkhau'=>$row['sv_matkhau'],
                'sodienthoai'=>$row['sv_sodienthoai'],
                'diachi'=>$row['sv_diachi']
              
            );
        

    }
    echo json_encode($mangSach);



?>