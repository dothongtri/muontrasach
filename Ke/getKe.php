<?php
require('DB.php');

$query = "SELECT * FROM `vi_tri` WHERE 1";

$data = mysqli_query($connect,$query);

$mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        //array_push($mangSach, new Sach($row['maso'], $row['ten'], $row['url']));

        $mangSach[] = array('id'=>$row['vt_id'],'tenke'=>$row['tenvitri']);
    }
    echo json_encode($mangSach);



?>