<?php 
    class Product {
        // cose in comune:
        // prezzo
        // foto
        // nome
    }
    //
    class Cuccia extends Product{
        //materiale
        //grandezza
        //tipologia
    }
    class Gioco extends Product{
        // materiale
        // rumoroso: si/no
        // batterie: si/no
    }
    class Cibo extends Product{
        // ingredienti - array
        // grandezza croccantini
        // kg per pacco
    }
    class Razza{
        public $race;
        function __construct($name){
            $this->name = $name; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>
    </head>
    <body>
        
    </body>
</html>