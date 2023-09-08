<?php

include("./Db/dbconfig.php");
$data = $database->getReference('Login')->getValue();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <p>
        <?php 
         if($data>0)
         {
             echo("Greater");
         }
         else{
             echo("Lesser");
         }
        ?>
    </p>
</body>
</html>