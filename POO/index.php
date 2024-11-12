<h1>POO livres</h1>
<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$Auteur = new Auteur("Stephen","King","4");
echo $Auteur->getPrenom();