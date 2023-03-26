<h1>Excercie 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle"); alimenterListeDeroulante($elements);
</p>

<h2>Résultat</h2>

<?php

    $elements = array("Monsieur","Madame","Mademoiselle");

    function alimenterListeDeroulante($elements){
        echo "<label><select>";
        foreach($elements as $value){
            echo "<option value='".$value."'>".$value."</option>";
            }
        echo "</select></label>";
    }

    alimenterListeDeroulante($elements)
?>