<?php

include('../Db/dbconfig.php');
$data = $database->getReference('Chikpete')->getValue();
foreach($data as $row){
    $temp= $row['Pickup'];
    $temp=$temp+1;
    $update=[
        'Pickup'=> $temp
    ];
    $out=$database->getReference('Chikpete/temp')->update($update);
}
header('Location:./Cttmc.html')
?>