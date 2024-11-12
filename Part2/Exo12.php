<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 12</h1>
    <p>A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];

foreach($tableauValeurs as $valeurs){
    var_dump($valeurs);
    echo "<br><br>";
}