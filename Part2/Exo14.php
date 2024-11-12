<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 14</h1>
    <p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
    adresse e-mail a le bon format.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php
$email ="elan@elan-formation.fr" ;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("L’adresse $email est une adresse e-mail valide");
  } else {
    echo("L’adresse $email n'est pas une adresse e-mail valide");
  }
