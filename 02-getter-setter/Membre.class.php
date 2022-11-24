<?php

class Membre
{


    private $prenom;
    private $nom;
    private $email;

    public function setPrenom($newPrenom)
    {
        if (is_string($newPrenom)) {
            $this->prenom = $newPrenom;
        } else {
            trigger_error('Ne correspond pas a l\'attendu', E_USER_ERROR);
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    
}

$membre = new Membre;
$membre->setPrenom("Etienne");
