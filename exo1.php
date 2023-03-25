<h1>Excercie 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument
     en majuscules et en rouge. Vous devrez appeler la fonction comme suit : convertirMajRouge($texte)</p>

<h2>Résultat</h2>

<?php

$phrase = "Lundi 4 avril aura lieu le premier AperoDev";
echo " ".$phrase." <br>";

function convertirMajRouge($texte){ // Fonction pour le texte en maj rouge
    $texte = strtoupper($texte); // Mettre les caractères en majuscules
    echo "<span style='color:red;'>".$texte."</span>"; // Texte en rouge
}
echo "Je répète :<br>";
convertirMajRouge($phrase)

?>