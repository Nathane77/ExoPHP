<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 9</h1>
    <p></p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php
function showRadio(){
    $elements = ["Masculin","Feminin","Autre"];
    echo "<div>";
    foreach($elements as $civilite){
        echo "<input type=radio>$civilite</input type=radio><br>";
    }
    echo "</div>";
};
showRadio();