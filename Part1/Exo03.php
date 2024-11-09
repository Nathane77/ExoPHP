<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 3</h1>
    <p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot
    « aujourd’hui » par le mot « demain ». Afficher l'ancienne et la nouvelle phrase.
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
$sentence = ("Notre fomartion DL commence aujourd'hui");
$newSentence = str_replace("aujourd'hui","demain", $sentence);
echo "ancienne phrase: $sentence<br>";
echo "nouvelle phrase: $newSentence";