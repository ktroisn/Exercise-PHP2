<h1>Excercie 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
v1 ➔ "Peugeot","408",5 v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments suivants :Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.
</p>

<h2>Résultat</h2>

<?php
    class Car {

        public string $brand;
        public string $model;
        public string $amountDoor;
        public int $actualSpeed;
        public bool $start;

        public function __construct($brand, $model, $amountDoor, $actualSpeed = 0, $start = false){
            $this->brand = $brand;
            $this->model = $model;
            $this->amountDoor = $amountDoor;
            $this->actualSpeed = $actualSpeed;
            $this->start = $start;
        }

        public function start(){
            if ($this->start){
                echo "<p>La " . $this->getBrand() . " " . $this->getModel() . " est déjà démarrée !</p>";
            }else {
                $this->start = true;
                echo "<p>La " . $this->getBrand() . " " . $this->getModel() . " démarre.</p>";
            }
        }

        public function stop(){
            if ($this->start){
                $this->start = false;
                $this->actualSpeed = 0;
                echo "<p>Le moteur de la " . $this->getBrand() . " " . $this->getModel() . " à été coupé.</p>";
            }else {
                echo "<p>Le contact de la " . $this->getBrand() . " " . $this->getModel() . " est déjà coupé.<p>";
            }
        }

        public function getBrand(){
            return $this->brand;
        }

        public function getModel(){
            return $this->model;
        }

        public function getAmountDoor(){
            echo "<p>Ce modele de " . $this->getBrand() . " " . $this->getModel() . " à " . $this->amountDoor . " portes.</p>";
        }

        public function getSpeed(){
            if ($this->start){
            echo "<p>La " . $this->getBrand() . " " . $this->getModel() . " roule à " .$this->actualSpeed . " km/h</p>";
            return $this->actualSpeed;
            }
            else {
                echo "<p>La " . $this->getBrand() . " " . $this->getModel() . " roule à 0 km/h car elle n'est pas démarrée.</p>";
            }
        }

        public function speedUp($actualSpeed){
            if ($this->start){
           
            echo "<p>La " . $this->getBrand() . " " . $this->getModel() . " va passer de $this->actualSpeed km/h à $actualSpeed km/h !</p>";
            $this->actualSpeed = $actualSpeed;

            }
            else {
                echo "<p>Démarrez la " . $this->getBrand() . " " . $this->getModel() . " pour accélerer.</p>";
            }
        }

        public function getDataCar(){       

            if($this->start){
    
                return "Infos du véhicule<br>".
                        "Nom et modèle du véhicule : " . $this->brand . " " . $this->model . "<br>".
                        "Nombre de portes : " . $this->amountDoor . " <br>".
                        "Le véhicule ".$this->brand." est démarré <br>".
                        "Sa vitesse actuelle est de ".$this->actualSpeed." km/h <br>";
    
            } else {
    
                return "Infos du véhicule<br>".
                       "Nom et modèle du véhicule : " . $this->brand . " " . $this->model . "<br>".
                       "Nombre de portes : " . $this->amountDoor . " <br>".
                       "Le véhicule ".$this->brand." est à l'arret <br>".
                       "Sa vitesse actuelle est de ".$this->actualSpeed." km/h <br>";
    
            }
        }
    }

    $car1 = new Car("Peugeot", "307", "5");
    $car2 = new Car("Citroen", "C4", "3");

    $car1->start();
    $car1->getSpeed();
    $car1->speedUp(130);
    $car2->start();

    echo $car1->getDataCar();
    echo $car2->getDataCar();
?>