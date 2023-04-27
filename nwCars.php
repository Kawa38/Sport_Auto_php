<?php 
require_once "data.php";
?>

<header>
    <?php require "partials/nwHeader.php" ?>  
</header>

<body>
    <div class="container">
        <h1 class="my-5"> <?=$tittle3 ?>   </h1>
        <div class="row flex-lg-row flex-xl-row flex-column">
            <?php  for($index=0;$index<count($cars);$index++){
                include "nwCarCard.php";
            }
            ?>
        </div>
    </div>
</body>

<footer>
<?php require "partials/nwFooter.php" ?>  
</footer>

</html>