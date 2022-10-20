<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer quest</title>
</head>
<body>
<?php

require '../src/Hello.php';

$hello = new App\Hello();

echo $hello->talk();

?>
</body>
</html>