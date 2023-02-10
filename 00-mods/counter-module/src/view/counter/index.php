<?php

declare(strict_types=1);

namespace Pol\Counter;

$path = '../../../src/controller\CounterController.php';
include $path;

$counterController = new CounterController();
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" href="counter.css">
    <script type="text/javascript" defer src="index.js"></script>

    <title>Canvas Diagramm</title>
</head>

<body>
    <canvas id="myCanvas" style="background: white;"></canvas>
    <legend for="myCanvas"></legend>
</body>

</html>