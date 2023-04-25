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
        <div class="jumbotron my-5 text-center">
            <h1 class="display-3 text-danger">
                Drive-X
            </h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to
                featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" routerLink="cars" role="button">eXotic Cars</a>
            </p>
        </div>


        <h2 class="my-5 text-center"><?= $tittle1 ?></h2>

        <div class="card-deck  justify-content-center">

            <div class="card text-center shadow">

                <div class="card-header bg-dark text-white">
                    <h2 class="card-title"><?=$drivers[0]["full name"] ?></h2>
                </div>

                <div class="card-body">

                    <img src=<?=$drivers[0]["coverImage"] ?> width="300px" height="150px" class="img-fluid"
                        alt="photo kenblock">
                    <hr>

                    <p>Origine: <?=$drivers[0]["pays"] ?></p>

                    <p>Discipline:
                        <span class=" badge badge-primary"><?=$drivers[0]["category"] ?></span>
                    </p>

                    <button class="btn btn-success mx-2 border">
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
            </div>
            <hr>
            <div class="card text-center shadow">

                <div class="card-header bg-dark text-white">
                    <h2 class="card-title"><?=$drivers[1]["full name"] ?></h2>
                </div>

                <div class="card-body">

                    <img src=<?=$drivers[1]["coverImage"] ?> width="300px" height="150px" class="img-fluid"
                        alt="photo kenblock">
                    <hr>

                    <p>Origine: <?=$drivers[1]["pays"] ?></p>

                    <p>Discipline:
                        <span class=" badge badge-primary"><?=$drivers[1]["category"] ?></span>
                    </p>

                    <button class="btn btn-success mx-2 border">
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
            </div>
            <hr>


        </div>


        <h2 class="my-5 text-center"><?= $tittle2 ?></h2>

        <div class="card-deck  justify-content-center">

            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title"> <?=$cars[1]["name"] ?></h2>
                </div>

                <div class="card-body">
                    <img src=<?=$cars[1]["coverImage"] ?>
                        class="img-fluid" alt="photo de <?=$cars[1]["coverImage"] ?>">
                    <hr>
                    <p>Origine: <?=$cars[1]["pays"] ?>

                    </p>

                    <p>Puissance: <span class="badge badge-info"><?=$cars[1]["power"] ?> CH</span></p>

                    <p>0 à 100 km/h: <span> <?=$cars[1]["perf"] ?> sec</span></p>

                    <p>Réserver maintenant !</p>

                    <button class="btn btn-primary ">Réserver</button>
                </div>
            </div>
            <hr>

            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title">Mercedes Amg One</h2>
                </div>

                <div class="card-body">
                    <img src="./assets/img/cars/mercedes.jpg"
                        class="img-fluid" alt="photo de voiture name">
                    <hr>
                    <p>Origine: Allemagne

                    </p>

                    <p>Puissance: <span class="badge badge-info">1000 CH</span></p>

                    <p>0 à 100 km/h: <span> 2.2 sec</span></p>

                    <p>Réserver maintenant !</p>

                    <button class="btn btn-primary ">Réserver</button>
                </div>
            </div>
            <hr>

        </div>


    </div>



</body>
<footer>
<?php require "nwFooter.php" ?>  
</footer>
</html>