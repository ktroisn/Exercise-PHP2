<h1>Excercie 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville"); afficherInput($nomsInput);</p>

<h2>Résultat</h2>

<?php

    $nomsInput = array("Nom","Prénom","Ville");

    function afficherInput($nomsInput){
        foreach($nomsInput as $value){
            echo "<div style='background-color:grey;padding:5px;width:200px'><label>".$value."<br><input><br></input></label></div>";
        }
    }

    afficherInput($nomsInput)
?>