<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercic 9</h1>
    <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php

function imposable(){
    $age = 32;
    $sexe = "F";
    echo "Age: $age<br>";
    echo "Sexe: $sexe<br>";
    if($age < 18){
        echo "Vous devez etre majeur poure etre imposable";
    }
    elseif($sexe == "F"){
        if($age >=18 && $age <=35){
            echo "La personne est imposable";
        }
        else{
            echo "La personne n'est pas imposable";
        };
    }
    elseif($sexe == "H"){
        if($age >= 20){
            echo "La personne est imposable";
        }
        else{
            echo "La personne n'est pas imposable";
        };
    }
};

imposable();