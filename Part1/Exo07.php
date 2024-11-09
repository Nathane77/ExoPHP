<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
function calcAge(){
    $age = 15;

    if($age < 6){
        echo ("Votre enfant est trop jeune pour participer");
    }
    elseif($age >= 6 && $age <= 7){
        echo("Votre enfant est un poussin !");
    }
    elseif($age >= 8 && $age <= 9){
        echo("Votre enfant est un Pupile !");
    }
    elseif($age >= 10 && $age <= 11){
        echo("Votre enfant est un Minime !");
    }
    elseif($age >= 12){
        echo("Votre enfant est un Cadet !");
    }
};

calcAge();


