<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 2</h1>
    <p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
    une fonction personnalisée.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
    table, th, td {
  border:1px solid black;
    }
</style>
</style>
</html>

<?php
function afficherTableHTML(){
    $capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
    ksort($capitales);
    
    echo "<table><tr><th>Pays</th><br><th>capital</th></tr>";
    foreach($capitales as $pays => $ville){
        echo "<tr><td>$pays</td><td>$ville</td></tr>";
    }
    echo "</table>";
}
afficherTableHTML();