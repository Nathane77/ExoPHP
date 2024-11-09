<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 5</h1>
    <p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
$changeRate = 4.5;
$franc = 100;
$euro = ($franc / $changeRate);


echo round($euro, 2);