<?php 
    require_once __DIR__.'/models/instances.php'  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- my css -->
        <link rel="stylesheet" href="css/style.css">
        <title>PHP OOP 2</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php 
                    foreach ($Products as $SingleProduct){
                        
                ?>
                    <div class="col-4 g-3">
                        <div class="card">
                            <img src="<?php echo $SingleProduct->img?>" class="card-img-top" alt="<?php echo $SingleProduct->name?>">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $SingleProduct->name?>
                                </h5>
                                <p class="card-text">
                                    Animale: <?php echo $SingleProduct->race->animal?>
                                </p>
                                <p class="card-text">
                                    Prezzo: <?php echo $SingleProduct->price?>
                                </p>
                                <p>Tipo di prodotto: <?php echo get_class($SingleProduct)?></p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                <?php        
                    }                
                ?>                
            </div>
        </div>
    </body>
</html>