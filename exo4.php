<h1>Excercie 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page
     Wikipédia 
    de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de 
    la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
  </p>

<h2>Résultat</h2>

<?php


$capitales = [
  "France" => "Paris",
  "Suisse" => "Bern",
  "Espagne" => "Madrid",
  "Pologne" => "Varsovie"
];

  function afficherTableHTML($capitales){
      asort($capitales); //Trier le tableau dans l'ordre de A a Z par rapport au value
      echo "<table style='width:300px;border: 1px solid black;border-collapse:collapse'>
              <tr>
                <td style='border: 1px solid black;border-collapse:collapse'><strong> Pays</strong></td>
                <td style='border: 1px solid black;border-collapse:collapse'><strong> Ville</strong></td>
                <td style='border: 1px solid black;border-collapse:collapse'><strong> Lien wiki</strong></td>
              </tr><br>"; //Premier echo permettant de donner la premiere partie du tableau (head)
      foreach($capitales as $key => $value){ 
          $key = strtoupper($key); // Mettre les key en majuscule
          echo "<tr>
                  <td style='border: 1px solid black;border-collapse:collapse'> ".$key."<br></td>
                  <td style='border: 1px solid black;border-collapse:collapse'> ".$value."<br></td>
                  <td style='border: 1px solid black;border-collapse:collapse'>
                  <a href='https://fr.wikipedia.org/wiki/' target='_blank'>Lien</a><br>
                  </td>
                </tr>"; 
              //Second eco pour afficher le contenu
      }
      echo "</table>"; // Echo pour fermer la table (a mettre apres la boucle)
  }

  afficherTableHTML($capitales)

?>