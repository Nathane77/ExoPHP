<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
    caractère passée en argument en majuscules et en rouge.
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

function convertirMajRouge(){
    $texte = "Mon texte en paramètre";
    $texteAllCaps = mb_strtoupper($texte);
    echo '<span style="color:RED;">'.$texteAllCaps.'</span>';
}
convertirMajRouge();
