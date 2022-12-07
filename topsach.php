<?php
require('DB.php');

$query = "SELECT  sach.s_masach, sach.s_tensach,s_hinh , s_nhaxuatban,s_namxuatban, s_soluong, s_tacgia,s_noidung
FROM lich_su,sach          
WHERE `sach`.`s_masach` = `lich_su`.`s_masach`                
GROUP by sach.s_masach
ORDER by   sach.s_masach DESC
LIMIT 10";

$data = mysqli_query($connect,$query);

    $mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        
        $mangSach[] = array('ma'=>$row['s_masach'], 
        'ten'=>$row['s_tensach'], 
        'url'=>$row['s_hinh'], 
        'soluong'=>$row['s_soluong'], 
        'tacgia'=>$row['s_tacgia'], 
        'nhaxuatban'=>$row['s_nhaxuatban'],
        'namxuatban'=>$row['s_namxuatban'],
        'noidung'=>$row['s_noidung']
        );
    }
    echo json_encode($mangSach);


?>