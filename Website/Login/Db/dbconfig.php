<?php

require __DIR__.'/../vendor/autoload.php';

use Kreait\Firebase\Factory;
$factory = (new Factory)
    ->withServiceAccount(__DIR__.'/key.json')
    ->withDatabaseUri('https://crowddensityfinal-default-rtdb.firebaseio.com');
    $database = $factory->createDatabase();
?>