<div class="row flex-lg-row flex-xl-row flex-column">
                <div class="card text-center shadow">
                    <div class="card-header bg-dark text-white">
                        <h2 class="card-title"><?=$drivers[$index]["full name"] ?></h2>
                    </div>
                    <div class="card-body">

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
                    </div>
                    </div>
                </div>
         </div>