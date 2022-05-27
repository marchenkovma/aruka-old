<?php

/**
 * @var $errno \aruka\ErrorHandler
 * @var $errstr \aruka\ErrorHandler
 * @var $errfile \aruka\ErrorHandler
 * @var $errline \aruka\ErrorHandler
 */

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Development</title>
</head>
<body>
    <h1>Error (development)</h1>
    <p>Code error: <?= $errno; ?></p>
    <p>Text error: <?= $errstr; ?></p>
    <p>File error: <?= $errfile; ?></p>
    <p>Line error: <?= $errline; ?></p>
</body>
</html>