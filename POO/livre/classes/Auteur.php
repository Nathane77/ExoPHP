<?php
class Auteur {
    //set les attributs de la class
    private string $prenom ;
    private string $nom;
    private array $livres;
   
    //crée l'objet et set les valeurs des attributs
    public function __construct(string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres =[];
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

    public function getAuteurFull() {
        return $this->prenom." ".$this->nom;
    }
    // public function afficherBibliographie(){
    //     foreach()
    // }
    
    public function getLivres()
    {
        return $this->livres;
    }
    
    public function setLivres($livres)
    {
        $this->livres = $livres;
        
        return $this;
    }

    public function addLivre(Livre $livre){
        $this->livres[] = $livre;
    }
    
    public function __toString(){
        return $this->Prenom." ".$this->nom;
    }
}