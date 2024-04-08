<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Hello;

$hello = new Hello();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1><?=$hello->talk();?></h1>


</body>
</html>
