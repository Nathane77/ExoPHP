<?php
class Auteur {
    //set les attributs de la class
    private string $prenom ;
    private string $nom;
    private int $nbLivre;

    //crée l'objet et set les valeurs des attributs
    public function __construct(string $prenom, string $nom, int $nbLivre){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->nblivre = $nbLivre;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom() {
        $this->Prenom;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom() {
        $this->nom;
    }

    public function getnbLivre() {
        return $this->nblivre;
    }
    public function setnbLivre() {
        return $this->nblivre;
    }

}