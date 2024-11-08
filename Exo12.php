<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 12</h1>
    <p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
$client = ["Mickaël"=>"FRA","Virgil"=>"ESP","Marie-Claire"=>"ENG","Denilson"=>"CRE"];
ksort($client);

foreach($client as $prenom => $langue){
    switch ($langue){
        case "FRA":
            echo "Salut $prenom <br>";
            break;
        case "ESP":
            echo "Hola $prenom <br>";
            break;
        case "ENG":
            echo "Hello $prenom <br>";
            break;
        default:
            echo "Hello $prenom <br>";
        break;
    };
};

