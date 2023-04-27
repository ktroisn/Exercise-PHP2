<h1>Excercie 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408"); BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
echo $v1->getInfos()."<.br/>";
echo $ve1->getInfos()."<.br/>";</p>

<h2>Résultat</h2>

<?php

    class Voiture {

        public string $marque;
        public string $modele;

    public function __construct($marque, $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getInfo(){
        return "Nom et modèle du véhicule : " . $this->marque . " " . $this->modele . "<br>";
    }

    }

    class VoitureElec extends Voiture {

        public int $autonomie;

        public function __construct($marque, $modele, $autonomie){
            parent::__construct($marque, $modele);
            $this->autonomie = $autonomie;
        }

        public function getAutonomie(){
            return $this->autonomie;
        }

        public function getInfo(){
            return "Nom et modèle du véhicule : " . $this->marque . " " . $this->modele . " avec " . $this->autonomie . "km d'autonomie.<br>";
        }
    
    }

    $ve1 = new Voiture("Volkswagen", "Touareg");
    $ve2 = new VoitureElec("Tesla", "Model S", "800");
    echo $ve1->getInfo()."<br/>";
    echo $ve2->getInfo()."<br/>";
    ?>

    