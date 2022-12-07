<?php
require('DB.php');


$query = "SELECT * FROM `Sach` WHERE vt_id=0";

$data = mysqli_query($connect,$query);

$mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        //array_push($mangSach, new Sach($row['maso'], $row['ten'], $row['url']));

        $mangSach[] = array('masach'=>$row['s_masach'],'tensach'=>$row['s_tensach']);
    }
    echo json_encode($mangSach);

?>