<?php
	include('../Db/dbconfig.php');
    $name=$_POST['uname'];
    $username = $_POST['email'];
    $password = $_POST['pass'];
    $data=[
        'name' => $name,
        'uname' => $username,
        'pass' => $password
    ];

    $postRef=$database->getReference('Clogin')->push($data);
    if($postRef){
        header('Location:./index.html');
    }

?>