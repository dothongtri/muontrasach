<?php
require('DB.php');

$query = "SELECT sv_ten,sv_diachi,sv_sodienthoai, COUNT(s_masach) as view
FROM lich_su,sinh_vien          
WHERE lich_su.sv_maso = sinh_vien.sv_maso
GROUP by  sinh_vien.sv_maso
ORDER by sinh_vien.sv_maso DESC
LIMIT 5";

$data = mysqli_query($connect,$query);

    $mangSach  = array();

    while($row  = mysqli_fetch_assoc($data)){
        
        $mangSach[] = array('ten'=>$row['sv_ten'], 
        'diachi'=>$row['sv_diachi'],
        'sv_sodienthoai'=>$row['sv_sodienthoai'],
        'view'=>$row['view'],
        );
    }
    echo json_encode($mangSach);


?>