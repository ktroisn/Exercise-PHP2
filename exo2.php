<h1>Excercie 2</h1>

<p>Soit le tableau suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et
 que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultat</h2>

<?php

$capitales = [
    "France" => "Paris",
    "Suisse" => "Bern",
    "Espagne" => "Madrid",
    "Pologne" => "Varsovie"
];

    function afficherTableHTML($capitales){
        echo "<table><tbody><tr><td>Pays<br>";
        foreach($capitales as $key => $value){
            echo "".$key."<br>";
        }
        echo "</td><td>Ville<br>";
        foreach($capitales as $key => $value){
            echo "".$value."<br>";
        }
        echo "</td></tr></tbody></table>";
    }

    afficherTableHTML($capitales)
?>

