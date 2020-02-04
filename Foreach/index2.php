<?php

//Afficher les noms et prénoms des élèves de ce collège

$college = array(
  'Sixieme' => array(
    array("Nom" => "Payet", "Prenom" => "Mickael"),
    array("Nom" => "Hoareau", "Prenom" => "Christine"),
    array("Nom" => "Maillot", "Prenom" => "Laure"),
  ),
  'Cinquieme' => array(
    array("Nom" => "Bourdon", "Prenom" => "Didier"),
    array("Nom" => "Legitimus", "Prenom" => "Pascal"),
    array("Nom" => "Campan", "Prenom" => "Bernard"),
    array("Nom" => "Fois", "Prenom" => "Marina"),
    array("Nom" => "Foresti", "Prenom" => "Florence"),
  ),
  'Quatrieme' => array(
    array("Nom" => "Willis", "Prenom" => "Bruce"),
    array("Nom" => "Lawrence", "Prenom" => "Laurence"),
    array("Nom" => "Johannson", "Prenom" => "Scarlett"),
    array("Nom" => "Jackson", "Prenom" => "Samuel"),
  ),
);

echo "10.Les élèves du collège : <br>";

//Ajoutez votre code ici

foreach ($college as $classe => $eleve) {
    echo "<br>"."$classe"." : "."<br>";

    foreach ($eleve as $identite) {
        foreach ($identite as $nom){
            echo "$nom"." ";
        }
    }
}

echo "<br><br>";

$nouvelEleve = array(array("Nom"=>"Haddock","Prenom"=>"Capitaine"));

$college["Troisieme"]=$nouvelEleve;


foreach ($college as $classe => $eleve) {
    echo "<br>".$classe." : "."<br>";
    foreach ($eleve as $identite=>$nom) {
        foreach ($nom as $propriete=>$valeur){
            echo $propriete." : ".$valeur."<br>";
        }
    }
};