<?php

include('../Db/dbconfig.php');
$data = $database->getReference('Banashnkari')->getValue();
foreach($data as $row){
    $temp= $row['Pickup'];
    $temp=$temp+1;
    $update=[
        'Pickup'=> $temp
    ];
    $out=$database->getReference('Banashnkari/temp')->update($update);
}
header('Location:./Bttmc.html')
?>