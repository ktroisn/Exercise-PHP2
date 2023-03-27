<h1>Excercie 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>

<h2>Résultat</h2>

<?php

    $nomsRadio = array("Monsieur", "Madame", "Autre");

    function afficherRadio($nomsRadio) {
        echo "<form>";
    foreach($nomsRadio as $value){
        echo "<div><input type='radio' name='choix'><label>".$value."</label></div><br>";
    }
        echo "</form>";
}

afficherRadio($nomsRadio)

?>