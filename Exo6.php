<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php


function Calc_Prix(){
    $prixU = 9.99;
    $TVA = 0.2;
    $quantité = 30;

   $PrixTTC = ($prixU * $TVA);
   echo "$PrixTTC<br>";
   $prixTotal = ($PrixTTC * $quantité); 

   echo "$prixTotal";
}

Calc_Prix();