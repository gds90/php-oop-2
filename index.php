<?php
// recupero il file db.php
require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="./css/style.css">
    <title>L'arca di Noè</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 text-center text-uppercase">
                    <h1>L'arca di Noè</h1>
                </div>
                <?php foreach ($products as $product) { ?>

                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src=<?php echo $product->image ?> class="card-img-top" alt="Immagine prodotto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->brand ?></h5>
                                <p class="card-text fs-3"><?php echo $product->description ?></p>
                                <p class="card-text">Categoria: <?php echo $product->category->name ?></p>
                                <?php if ($product instanceof Cibo) { ?>
                                    <p class="card-text">Tipo di cibo: <?php echo $product->type_of_food ?></p>
                                <?php } ?>
                                <?php if ($product instanceof Cibo) { ?>
                                    <p class="card-text">Gusto: <?php echo $product->taste ?></p>
                                <?php } ?>
                                <?php if ($product instanceof Gioco || $product instanceof Accessorio) { ?>
                                    <p class="card-text">Materiale: <?php echo $product->made_of ?></p>
                                <?php } ?>
                                <?php if ($product instanceof Gioco || $product instanceof Accessorio) { ?>
                                    <p class="card-text">Ideale per: <?php echo $product->made_for ?></p>
                                <?php } ?>
                                <p>Prezzo: <?php echo $product->price ?>€</p>
                                <div class="cod_art">
                                    <p>Cod. articolo: <?php echo $product->getCode() ?></p>
                                </div>
                                <div class="button text-center ">
                                    <a href="#" class="btn btn-outline-info">Aggiungi al carrello</a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</body>

</html>