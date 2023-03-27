<h1>Excercie 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.
Affichage
L’adresse elan@elan-formation.fr est une adresse e-mail valide L’adresse contact@elan est une adresse e-mail invalide</p>

<h2>Résultat</h2>

<?php
    
    $email = "john.doe@example.com";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("L'adresse : '$email' est une adresse e-mail valide.");
    } else {
      echo("L'adresse : '$email' est une adresse e-mail invalide.");
    }
    
?>