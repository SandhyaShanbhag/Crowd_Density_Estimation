<?php

include('../Db/dbconfig.php');
$data = $database->getReference('Majestic')->getValue();
foreach($data as $row){
    $temp= $row['Pickup'];
    $temp=$temp+1;
    $update=[
        'Pickup'=> $temp
    ];
    $out=$database->getReference('Majestic/temp')->update($update);
}
header('Location:./Mttmc.html')
?>