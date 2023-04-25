<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Drive-X</title>
</head>

<header>
    <?php require "nwHeader.php" ?>  
</header>

<body>

    <div class="container">

        <h1 class="my-5">
           <?= $tittle4 ?>
        </h1>

        <?php  for($index=0;$index<count($drivers);$index++){
            include "nvDriverCard.php";
        }
        ?>


</body>

<footer>
<?php require "nwFooter.php" ?>  
</footer>

</html>