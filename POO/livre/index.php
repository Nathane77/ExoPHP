<h1>POO livres</h1>
<?php
//force automatically the link of the classes' pages
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$stephK = new Auteur("Stephen","King");
echo $stephK->getAuteurFull();
echo "<br><br>";


$l1 = new Livre ("CA","1986","1138","20",$stephK) ;
echo $l1;


$l2 = new Livre ("Simetierre","1983","374","15",$stephK) ;
echo $l2;


$l3 = new Livre ("Le Fléau","1978","823","15",$stephK) ;
echo $l3;


$l4 = new Livre ("Shining","1977","447","16",$stephK) ;
echo $l4;

var_dump($stephK);