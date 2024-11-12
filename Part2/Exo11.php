<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 11</h1>
    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
    chaîne de caractère représentant une date.</p>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>

<?php
//local sets language
$locale = "fr_FR";
//type of date formatting set to FULL to get the date in full letters
$dateType = IntlDateFormatter::FULL;
//type of time formatting set to none because we are not using time
$timeType = IntlDateFormatter::NONE;
//applies the info on the formater
$formatter =new IntlDateFormatter($locale, $dateType, $timeType);
//format the date and sets to date
$dateTime = new DateTime("2018-02-23");
//writes the date with the right format type
echo $formatter->format($dateTime);