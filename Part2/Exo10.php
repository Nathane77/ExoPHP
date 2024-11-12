<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 10</h1>
    <p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
    complet qui contient les informations suivantes: <br> champs de texte avec nom, prénom, adresse e-
    mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation:<br>
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet »</p>
</body>
<style>
    *{
        margin: 0.5em;
    }
    h1, p{
        padding: 0
    }
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php

//Input for name, last name, town.
function showInput(){
    $nomsInput = ["Nom","Prénom","Ville"];
    foreach($nomsInput as $input){
        echo "<label>$input</label><br><input></input><br>";
    }
    echo "<label>Email</label><br><input type=email></input><br>";
}

//Radio input for civilité
function showRadio(){
    $elements = ["Masculin","Feminin","Autre"];
    foreach($elements as $civilite){
        echo "<input type=radio name=civilite>$civilite</input type=radio><br>";
    }
};
function alimenterElements(){
    $elements = ["Développeur Logiciel","Designer web","Chef de projet"];
    echo "<select>";
    foreach($elements as $formation){
        echo "<option value=$formation>$formation</option>";
    }
        "</select>";
        echo "<br>";
}
echo "<form>";
showInput();
showRadio();
alimenterElements();
echo "<input type=submit>";
echo "</form>";
