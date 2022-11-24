<?php 
/**Ne pas oublier dans ce langage de merde il y a des $ et les . sont transformé en -> 
 * En même temps si on peut pas faire chier les autres developpeurs à quoi ça sert hein
 */

/**Par convention on met les fichier class avec une majuscule
 * Mieux de mettre un .class mais pas obligatoire, et  peu respecté
 * 
 * En oo on suit un principe d'encapsulation
 */
class Panier {

    // En OO on parle d'atribut/de propriété, et pas de variables
    public $nbProduit;

    // En OO on parle de méthode, et pas de fonction
    /**En OO on retrouve 3 niveaus d'accessibilité : public private et protected
     */
    public function ajouterProduit()
    {
        return 'Le produit à bien été ajouté';
    }

    protected function retirerProduit()
    {
        return 'Le produit à bien été retiré';
    }

    private function afficherProduit()
    {
        return 'Mais c\'est fabuleux, j\'affiche mon produit!!!';
    }

    public function emmerde()
    {
        return `L'emmerdemenet est présent genre vraiment de ouf, c'est dommage `;
    }
}

$monPanier = new Panier;

echo '<pre>'; var_dump($monPanier);'</pre>';
echo '<pre>'; print_r(get_class_methods($monPanier));'</pre>';

$nbProduit = 5;// faux
$monPanier->nbProduit = 5;// Correct

echo $nbProduit;


/**Normalement une class = un fichier */
class Produit extends Panier{
    public function test()
    {
        // return $this->retireProduit();
        // return $this->afficherProduit(); 
    }
}

$monPanier2 = new Panier;

echo '<pre>'; var_dump($monPanier);'</pre>';

