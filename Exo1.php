<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <p>Ecrire un algorithm permettant de compter le nombre de caracteres dans cette phrases (espace inclus)</p>
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

$nbCaracteres = strlen($sentence);
echo "La phrase contient $nbCaracteres caracteres";
