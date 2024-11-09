<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 5</h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.
</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
function showInput(){
    $nomsInput = ["Nom","Prénom","Ville"];
    foreach($nomsInput as $input){
        echo "<label>$input</label><br><input></input><br><br>";
    }
}
showInput();    