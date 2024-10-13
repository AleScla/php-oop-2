<?php 
    class Razza{
        public $race;
        function __construct(string $race){
            $this->race = $race; 
        }
    }
    class Product {
        // cose in comune:
        public $price;
        public $img;
        public $name;
        // prende il valore dalla classe Razza
        protected $race;

        public function getRace(){
            return $this->race;
        }
        public function setRace(Razza $race){
            $this->race = $race;
        }
        
        function __construct(float $price, string $img, string $name, Razza $race){
            $this->price = $price;
            $this->img = $img;
            $this->name = $name;
            $this->setRace($race);
        }
        
    }
    //
    class Cuccia extends Product{
        public $material;
        public $size;
        public $type;
        function __construct(float $price, string $img, string $name, Razza $race, string $material, string $size, string $type){
            parent::__construct($price, $img, $name, $race);
            $this->material = $material;
            $this->size = $size;
            $this->type = $type;
        }
    }
    class Gioco extends Product{
        // materiale
        // rumoroso: si/no
        // batterie: si/no
        public $material;
        public $noisy;
        public $battery;
        function getType(){
            return $this -> noisy;
        }
        function setType(string $noisy){
            if($noisy == 'si'){
                $this ->noisy = 'Rumoroso';
            }
            else if ($noisy == 'no'){
                $this ->noisy = 'Non rumoroso';
            }
        }
        function hasBattery(){
            return $this -> battery;
        }
        function setBattery(){
            if($noisy == 'si'){
                $this ->noisy = 'Ha la batteria';
            }
            else if ($noisy == 'no'){
                $this ->noisy = 'Non ha la batteria';
            }
        }
        function setType(string $noisy){
            if($noisy == 'si'){
                $this ->noisy = 'Rumoroso';
            }
            else if ($noisy == 'no'){
                $this ->noisy = 'Non rumoroso';
            }
        }
        function __construct(float $price, string $img, string $name, Razza $race, string $material, string $noisy, string $battery){
            parent::__construct($price, $img, $name, $race);
            $this->material = $material;
            $this->setType('no');
            $this->setBat;
        }
    }
    class Cibo extends Product{
        // ingredienti - array
        // grandezza croccantini
        // kg per pacco
    }
    
    $cani = new Razza('Cane');
    $gatto = new Razza ('Gatto');

    $ProdottoCane = new Gioco (15.50, 'img','cane cane cane', $cani, 'Plastica', 'si', 'ciao');
    var_dump($ProdottoCane);  
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