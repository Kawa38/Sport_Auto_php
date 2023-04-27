

<header>
    <?php require "partials/nwHeader.php" ?>  
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