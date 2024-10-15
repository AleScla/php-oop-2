<?php
    trait Material {
        protected $material;
        public function getMaterial(){
            return $this->material;
        }
        public function setMaterial($material){
            if(strtolower($material) == 'plastica' || strtolower($material) == 'stoffa'){
                $this->material = $material;
            }
            else{
                throw new Exception('Materiale non valido');
            }
        }
    }
    class Razza{
        public $animal;
        function __construct(string $animal){
            $this->animal = $animal; 
        }
    }
    class Product {
        // cose in comune:
        public $price;
        public $img;
        public $name;
        // prende il valore dalla classe Razza
        public $race;

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
        use Material;
        public $size;
        public $type; // particolari aggiuntivi cuccia
        function __construct(float $price, string $img, string $name, Razza $race, string $material, string $size, string $type){
            parent::__construct($price, $img, $name, $race);
            $this->setMaterial($material);
            $this->size = $size;
            $this->type = $type;
        }
    }
    class Gioco extends Product{
        // materiale
        // rumoroso: si/no
        // batterie: si/no
        use Material;
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
        function setBattery($battery){
            if($battery == 'si'){
                $this ->battery = 'Ha la batteria';
            }
            else if ($battery == 'no'){
                $this ->battery = 'Non ha la batteria';
            }
        }

        function __construct(float $price, string $img, string $name, Razza $race, string $material, string $noisy, string|null $battery){
            parent::__construct($price, $img, $name, $race);
            $this->setMaterial($material);
            $this->setType($noisy);
            $this->setBattery($battery);
        }
    }
    class Cibo extends Product{
        // ingredienti - array
        // grandezza croccantini
        // kg per pacco
        public $ingredients;
        public $animalSize;
        public $weight;
        function __construct(float $price, string $img, string $name, Razza $race, string|array $ingredients, string $animalSize, int $weight){
            parent::__construct($price, $img, $name, $race);
            $this->ingredients = $ingredients;
            $this->animalSize = $animalSize;
            $this->weight = $weight;
        }
    }