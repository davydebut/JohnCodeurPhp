<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="menu">
        <?php include "menu.php" ?>
    </div>
    <h1>Nos Promotions</h1>
    <p><?php require "variables.php"; echo $promotion; ?></p>
</body>
</html>