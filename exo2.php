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
        ksort($capitales); //Trier le tableau dans l'ordre de A a Z par rapport au key
        echo "<table style='width:300px;border: 1px solid black;border-collapse:collapse'>
                <tr>
                <td style='border: 1px solid black;border-collapse:collapse'><strong> Pays</strong></td>
                <td style='border: 1px solid black;border-collapse:collapse'><strong> Ville</strong></td>
                </tr><br>"; //Premier echo permettant de donner la premiere partie du tableau (head)
        foreach($capitales as $key => $value){ 
            $key = strtoupper($key); // Mettre les key en majuscule
            echo "<tr><td style='border: 1px solid black;border-collapse:collapse'> ".$key."<br></td>
                <td style='border: 1px solid black;border-collapse:collapse'> ".$value."<br></td></tr>"; 
                //Second eco pour afficher le contenu
        }
        echo "</table>"; // Echo pour fermer la table (a mettre apres la boucle)
    }

    afficherTableHTML($capitales)
?>

