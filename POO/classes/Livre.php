<?php
class livre {
    private string $nom
    private int $nbPages
    private float $prix


    public function __construct(string $nom, int $nbPages, float $prix){
        $this->nom = $nom;
        $this->nbPages = $nbPages
        $this->prix = $prix
    }
    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    
    public function getNbPages()
    {
        return $this->nbPages;
    }

    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }
 
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}