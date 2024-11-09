<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 8</h1>
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
function showImage(){
    $repetition = 4;
    for($i = 0; $i < $repetition; $i++){
        echo "<img src= https://my.mobirise.com/data/userpic/764.jpg alt=piti_chien> ";
    }
};
showImage();