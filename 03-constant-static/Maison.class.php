<?php 

class Maison{
    public $couleur = 'Blanc';
    public static $terrain = '500m^2';
    private static $nbPiece = 7;
    // Par normalisation on mets les constantes en uppercase 
    const HAUTEUR = 45;
}

$maison = new Maison;

$maison2 = new Maison;
$maison2->couleur = 'bleue';
// On montre que 

// on peut modifier une propiete static d'une classe via 
Maison::$terrain = '154m^2';