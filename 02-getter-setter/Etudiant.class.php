<?php

class Etudiant{
    private $prenom;
    private $nom;
    
    public function __construct($nom, $prenom)
    {
        echo `Je récuperer bien l'information $nom, $prenom<br>`;
        $this->setPrenom($prenom);
        $this->setNom($nom);
    }

    public function setPrenom($newPrenom)
    {
        $this->prenom = $newPrenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setNom($newNom)
    {
        $this->nom = $newNom;
    }
    public function getNom()
    {
            return $this->nom;
    }

}