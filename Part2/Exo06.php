<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 6</h1>
    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
    de valeurs.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php
function alimenterElements(){
    $elements = ["Monsieur","Madame","Mademoiselle"];
    echo "<select>";
    foreach($elements as $civilite){
        echo "<option value=$civilite>$civilite</option>";
    }
        "</select>";
}
alimenterElements();
