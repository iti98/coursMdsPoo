<?php

abstract class Vehicule
{

    public final function demarrer()
    {
        return 'Je démare mon vehicule';
    }

    public function carburant()
    {
    }

    public function nbrTestsObligatoire()
    {
        return 100;
    }
}

class Renault extends Vehicule
{
    public function carburant()
    {
        return 'Diesel';
    }

    public function nbrTestsObligatoire()
    {
        return parent::nbrTestsObligatoire() + 30;
    }
}

class Peaugeot extends Vehicule
{
    public function carburant()
    {
        return 'Essence';
    }
    public function nbrTestsObligatoire()
    {
        return parent::nbrTestsObligatoire() + 70;
    }
}
