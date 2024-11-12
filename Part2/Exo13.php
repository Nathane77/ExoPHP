<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 13</h1>
    <p>Comme nous l’avons vu à l’exercice précédent, les var_dump() vont nous servir à débugger. Mais
    l’affichage peut-être un peu chaotique. Afin de l’améliorer nous allons utiliser un outil bien
    pratique : Xdebug</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
var_dump($tableauValeurs);