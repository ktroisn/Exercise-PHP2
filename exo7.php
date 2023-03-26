<h1>Excercie 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif 
    si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résultat</h2>

<?php

    $elements = array(
        "1" => "Choix 1",
        "2" => "Choix 2",
        "3" => "Choix 3"
    );

    function genererCheckbox($elements){
        echo "<form>";
        foreach($elements as $key => $value){
            echo "<input type='checkbox' value='".$key."'></input>".$value."<br>";
        }
        echo "</form>";
    }

    genererCheckbox($elements)

?>