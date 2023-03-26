<h1>Excercie 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);</p>

<h2>Résultat</h2>

<?php
    $image = "<img src='http://my.mobirise.com/data/userpic/764.jpg'>";
    
    for($i = 1; $i <=4; $i ++){
        echo $image;
    }
?>