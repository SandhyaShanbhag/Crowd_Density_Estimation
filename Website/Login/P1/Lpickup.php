<?php

include('../Db/dbconfig.php');
$data = $database->getReference('Lalbagh')->getValue();
foreach($data as $row){
    $temp= $row['Pickup'];
    $temp=$temp+1;
    $update=[
        'Pickup'=> $temp
    ];
    $out=$database->getReference('Lalbagh/temp')->update($update);
}
header('Location:./Lttmc.html')
?>