<?php
    // $connect = mysqli_connect("localhost","root","","sach");
    // mysqli_query($connect, "SET NAMES 'utf8");

    require('DB.php');

    // $ls_id = $_POST['ls_id'];
    $ms = $_GET['maso'];
    $stt = $_GET['stt'];
    if($stt==0){
        $query = "SELECT lich_su.ls_id, ls_ngaymuon, ls_ngayhethan,ls_trangthai,s_tensach,s_hinh,sv_maso,ls_ngaytra
        From lich_su, sach
        where lich_su.s_masach = sach.s_masach
        AND sv_maso = '$ms'
        AND ls_trangthai = 0
        AND (`ls_ngayhethan`-Curdate())>=0";
    }
    if($stt==1){
        $query = "SELECT lich_su.ls_id, ls_ngaymuon, ls_ngayhethan,ls_trangthai,s_tensach,s_hinh,sv_maso,ls_ngaytra
        From lich_su, sach
        where lich_su.s_masach = sach.s_masach
        AND sv_maso = '$ms'
        AND ls_trangthai = 1";
    }
    if($stt==2){
        $query = "SELECT lich_su.ls_id, ls_ngaymuon, ls_ngayhethan,ls_trangthai,s_tensach,s_hinh,sv_maso,ls_ngaytra
        From lich_su, sach
        where lich_su.s_masach = sach.s_masach
        AND sv_maso = '$ms'
        AND ls_trangthai = 0
        AND (`ls_ngayhethan` - Curdate())<0";
       
    }
    if($stt==-1){
        $query = "SELECT lich_su.ls_id, ls_ngaymuon, ls_ngayhethan,ls_trangthai,s_tensach,s_hinh,sv_maso,ls_ngaytra
    From lich_su, sach
    where lich_su.s_masach = sach.s_masach
    AND sv_maso = '$ms'";
    }
    

    $data = mysqli_query($connect,$query);

    $mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        //array_push($mangSach, new Sach($row['maso'], $row['ten'], $row['url']));

        $mangSach[] = array('id' => $row['ls_id'], 
            'ngaymuon'=>$row['ls_ngaymuon'], 
            'ngayhethan'=>$row['ls_ngayhethan'],
            'trangthai'=>$row['ls_trangthai'],
            'tensach'=>$row['s_tensach'],
            'hinh' => $row['s_hinh'],
            'mssv'=>$row['sv_maso'],
            'ngaytra' => $row['ls_ngaytra']
    
        );
    }
    echo json_encode($mangSach);


?>