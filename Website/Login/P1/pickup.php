<?php

include('../Db/dbconfig.php');
$data = $database->getReference('Jayanagar')->getValue();
foreach($data as $row){
    $temp= $row['Pickup'];
    $temp=$temp+1;
    $update=[
        'Pickup'=> $temp
    ];
    $out=$database->getReference('Jayanagar/temp')->update($update);
}
header('Location:./ttmc.html')
?>