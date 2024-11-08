<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 10</h1>
    <p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
$aPayer = 152;
$verser = 200;
$nb10 = 0;
$nb5 = 0;
$nb2 = 0;
$nb1 = 0;
$rest = ($verser - $aPayer);

if($rest == 0){
    echo "Merci de votre visite";
}
else{
    echo "Pour rendre $rest €, il vous faut:<br>";

    while($rest >=10){
        $rest -=10;
        $nb10 += 1;
        };
    echo "Billet de dix: $nb10<br>";

    while($rest >=5){
        $rest -=5;
        $nb5 += 1;
        };
    echo "Billet de cinq: $nb5<br>";

    while($rest >=2){
        $rest -=2;
        $nb2 += 1;
        };
    echo "pieces de deux: $nb2<br>";

    while($rest >=1){
        $rest -=1;
        $nb1 += 1;
        };
    echo "pieces de un:  $nb1<br>";
};