<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 11</h1>
    <p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
    tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
    d’afficher le nombre de marques de voitures présentes dans le tableau.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php

$marques = ['Peugeot', 'Renault', 'BMW', 'Mercedes'];
$nbMarque = count($marques);
$i = 0;

// while($i < $nbMarque){
//     echo "-".$marques[$i]."<br>";
//     $i ++;
// };

// foreach($tableau    as $valeur)

foreach($marques as $value){
    echo $value;
};

