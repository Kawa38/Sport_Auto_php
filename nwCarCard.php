<div class="card text-center shadow">


    <div class="card text-center shadow">
        <div class="card-header bg-dark text-white ">
            <h2 class="card-title"> <?=$cars[$index]["name"] ?></h2>
        </div>

        <div class="card-body">
            <img src=<?=$cars[$index]["coverImage"] ?>
                class="img-fluid" alt="photo de <?=$cars[1]["coverImage"] ?>">
            <hr>
            <p>Origine: <?=$cars[$index]["pays"] ?>

            </p>

            <p>Puissance: <span class="badge badge-info"><?=$cars[$index]["power"] ?> CH</span></p>

            <p>0 à 100 km/h: <span> <?=$cars[1]["perf"] ?> sec</span></p>

            <p>Réserver maintenant !</p>

            <button class="btn btn-primary ">Réserver</button>
        </div>
    </div>

                <!-- <div class="card-header bg-dark text-white">
                    <h2 class="card-title"><?=$drivers[$index]["full name"] ?></h2>
                </div> -->

                <!-- <div class="card-body">

                    <img src=<?=$drivers[$index]["coverImage"] ?> width="300px" height="150px" class="img-fluid"
                        alt="photo kenblock">
                    <hr>

                    <p>Origine: <?=$drivers[$index]["pays"] ?></p>

                    <p>Discipline:
                        <span class=" badge badge-primary"><?=$drivers[$index]["category"] ?></span>
                    </p>

                    <button class="btn btn-success mx-2 border">
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div> -->
            </div>