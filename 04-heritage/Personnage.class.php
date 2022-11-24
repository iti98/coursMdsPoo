<?php

class Personnage
{

    protected function deplacement()
    {
        return 'Je me déplace oulala!';
    }

    public function saut()
    {
        return 'Je saute très haut!';
    }
}

// Hérite de la classe personnage
class Mario extends Personnage{
    public function quiSuisJe()
    {
        return `Un personnage de mario $this->deplacement() et $this->saut()`;
    }
}

class Bowser extends Personnage{
    public function quiSuisJe()
    {
        return `Un mechant dans mario, $this->deplacement() et $this->saut()`;
    }

    public function saut()
    {
        return `Je ne saute pas très haut...`;
    }
}

$mario = new Mario;
echo print_r(get_class_methods($mario)); "<br>";

echo $mario->quiSuisJe();

$bowser = new Bowser;

echo $bowser->quiSuisJe();
