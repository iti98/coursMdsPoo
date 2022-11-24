<?php

class Voiture
{
    private $litresEssence = 0;
    private $maxLitres = 50;

    public function getMaxLitres()
    {
        return $this->maxLitres;
    }

    public function setLitresEssence($newValue)
    {
        $this->litresEssence = $newValue;
    }
    public function getLitresEssences()
    {
        return $this->litresEssence;
    }
}

class Pompe
{
    private $litresEssence = 0;

    public function setLitresEssence($newValue)
    {
        $this->litresEssence = $newValue;
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function donnerLitresEssence(Voiture $voiture, $quantity)
    {
        if (
            $quantity > $this->litresEssence &&
            $voiture->getMaxLitres() <= ($voiture->getLitresEssences() + $quantity)
        ) {
            trigger_error('La pompe n\'à pas autant de carburant.');
        } else {
            $this->setLitresEssence($this->litresEssence - $quantity);
            $voiture->setLitresEssence($voiture->getLitresEssences() + $quantity);
        }
    }
}


$voiture1 = new Voiture;
$voiture1->setLitresEssence(5);
echo `La voiture à $voiture1->getLitresEssences()L d'essence.`;

$pompe1 = new Pompe;
$pompe1->setLitresEssence(500);
echo `La pompe à $pompe1->getLitresEssence()L d'essence.`;

$pompe1->donnerLitresEssence($voiture1, 50);
echo `La voiture à $voiture1->getLitresEssences()L d'essence.`;
echo `La pompe à $pompe1->getLitresEssence()L d'essence.`;

$pompe1->donnerLitresEssence($voiture1, 10);
echo `La voiture à $voiture1->getLitresEssences()L d'essence.`;
echo `La pompe à $pompe1->getLitresEssence()L d'essence.`;

$pompe1->donnerLitresEssence($voiture1, 30);
echo `La voiture à $voiture1->getLitresEssences()L d'essence.`;
echo `La pompe à $pompe1->getLitresEssence()L d'essence.`;
