<?php

namespace Model;

class EntityRepository
{
    // entity représente les tables en BDD
    // repository représente les classes qui vont servir à faire les requetes liées à l'action de l'utilisateur

    // propriété qui va stocker les informations liées à la connexion à la BDD (objet pdo de la classe PDO)
    private $pdo;
    // propriété qui va stocker le nom de la table de la BDD
    public $table;
    // si plusieurs tables dans la BDD, en declarer autant
    // public $table2;
    // public $table3;
    // public $table4;

    // méthode qui va détailler la procédure pour se connecter à la BDD
    public function getPdo()
    {

        // si l'objet courant ($this) ne pointe pas vers $pdo, cela veut dire que je ne suis pas connecté, je coderai donc dans le if, comment se connecter
        if (!$this->pdo) {
            // première étape, récupérer les infos stcokées dans le config.xml. Le test se fait dans un try/catch
            try {
                // fonction prédéfinie (simplexml_load_file) qui va permettre d'extraire les informations codées dans un fichier xml
                // je lui donne en argument le chemin vers ce fichier
                // je stocke ses infos dans une variable $xml
                $xml = simplexml_load_file('App/config.xml');
                // echo "<pre>"; print_r($xml) ;echo "</pre>";
                // je stocke dans la propriété table (en pointant avec $this) le résultat stocké dans la variable $xml, qui pointe vers la balise table
                $this->table = $xml->table;

                // je teste la connexion à la BDD dans un bloc try
                try {
                    // en pointant avec this sur pdo, je stocke la connexion dans la propriété pdo ligne 8 de ce fichier
                    // j'utilise à nouveau $xml pour récupérer les valeurs stockées dans chaque balise du config.xml
                    // dnas le array, je définis le mode Exception pour recevoir les erreurs, puis l'encodage en UTF8
                    $this->pdo = new \PDO("mysql:host=$xml->host; dbname=$xml->dbname", "$xml->user", "$xml->password", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'));
                    // echo "Connexion réussie";
                }
                // Je travaille désormais avec PDO Exception, plus spécifique à la classe PDO
                catch (\PDOException $erreur) {
                    echo "Erreur: " . $erreur->getMessage() . ". Le problème provient peut-etre des données insérées dans le config.xml <br> Erreur liée à la ligne " . $erreur->getLine() . " dans le fichier " . $erreur->getFile();
                }
            } catch (\Exception $erreur) {
                echo "Impossible d'extraire les informations du fichier config.xml.<br>
                Erreur: " . $erreur->getMessage() . "<br> Il ya une erreur ligne " . $erreur->getLine() . " dans le fichier " . $erreur->getFile() . '<br>';
            }
        }
        // si au contraire $htis peut pointer sur $pdo, alors cela veut dire que je suis connecté, alors je ne fais que retourner le résultat stocké dans $pdo
        return $this->pdo;
    }

    public function selectAllEntityRepo()
    {
        $resultat = $this->getPdo()->query("SELECT * FROM $this->table");
        $donnees = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        return $donnees;
    }

    public function save()
    {
        echo 'save';
    }

    public function select()
    {
        echo 'select';
    }

    public function delete()
    {
        echo 'delete';
    }

    public function getFields()
    {
        return '';
    }
}
// instanciation de la classe pour pointer ensuite sur la méthode getPdo pour vérifier si je récupère les infos stcokées dans le config.xml
// $et = new EntityRepository;
// $et->getPdo();
