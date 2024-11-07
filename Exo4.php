<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 4</h1>
    <p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
   use CodeInc\StripAccents\StripAccents;

function palindrome(){
    $sentence = ("Engage le jeu que je le gagne");
    $sentenceNoSpace = str_replace (' ','', $sentence);
    $sentenceLowCas = mb_strtolower($sentenceNoSpace);
    $sentenceReverse = strrev($sentenceLowCas);
    
    if($sentenceReverse == $sentenceLowCas){
        echo "La phrase est un palindrome";
    }
    else{
        echo "La phrase n'est pas un palindrome";
    };
};



palindrome();;

