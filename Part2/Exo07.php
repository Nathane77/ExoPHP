<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 7</h1>
    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php
function showCheckbox(){
    $elementes = ["choix 1","choix 2","choix 3"];
    foreach($elementes as $choice){
        echo "<input type=checkbox><label>$choice</label><br></input>";
    }
};
showCheckbox();
//probably needs $_post for linking answers