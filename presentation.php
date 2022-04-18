<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Super global get -->
    <!-- <h1><?php // echo "Hello moi c'est ". $_GET['nom']." et j'ai ". $_GET['age']. " ans !" 
                ?></h1>

    <?php // var_dump($_GET) 
    ?> -->

    <!-- Super global post -->
    <p>Hello, mon nom c'est <?php echo $_POST['nom'] ?>
        et mon email c'est <?php echo $_POST['email'] ?></p>

</body>

</html>