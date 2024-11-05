<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 2</h1>
    <p>a partir de la phrases de l'exercice 1 ecrire un algorithm permettant de compter le nombre de mots</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php

$sentence = "Notre fomartion DL commence aujourd'hui";

$nbMots = str_word_count($sentence);
echo "La phrase contient $nbMots mots";