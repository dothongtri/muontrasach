<?php
require('DB.php');

$idke = $_GET['make'];
$query = "SELECT * FROM `Sach` WHERE vt_id = $idke";

$data = mysqli_query($connect,$query);

$mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        //array_push($mangSach, new Sach($row['maso'], $row['ten'], $row['url']));

        $mangSach[] = array('masach'=>$row['s_masach'],'tensach'=>$row['s_tensach'],'url'=>$row['s_hinh']);
    }
    echo json_encode($mangSach);

?>