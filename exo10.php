<h1>Excercie 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet 
qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e- mail, ville, sexe et une liste de choix parmi lesquels
 on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2>Résultat</h2>

<?php

    $nomsInput = array("Nom", "Prénom", "Adresse e-mail", "Ville");
    $sexe = array("Homme", "Femme", "Autre");
    $poste = array("Développeur logiciel", "Designer Web", "Intégrateur", "Chef de projet");

    function afficherInput($nomsInput){
        foreach($nomsInput as $value){
            echo "<label>".$value."<br><input><br></input></label>";
        }
    }
    function alimenterListeDeroulante($elements){
        echo "<label><select><option value=''>Select</option>";
        foreach($elements as $value){
            echo "<option value='".$value."'>".$value."</option>";
            }
        echo "</select></label><br>";
    }
    function afficherRadio($nomsRadio) {
        foreach($nomsRadio as $value){
            echo "<input type='radio' name='choix'><label>".$value."</label><br>";
        }
        
    }   
    echo "<form><div>";
        afficherInput($nomsInput);
        alimenterListeDeroulante($sexe);
        afficherRadio($poste);
    echo "<br><input type='submit' value='Envoyer'/></div></form>";

?>