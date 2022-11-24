<?php

class A
{
    protected $nbr1;
    protected $nbr2;
    protected $nbr3;

    public function calcul()
    {
        return 10;
    }
}

class B extends A
{
    public function calcul()
    {
        $parentResult = parent::calcul();

        if ($parentResult < 100) {
            return `$parentResult est bien inferieur a 100`;
        }
    }
}

$maClass = new B;
echo print_r(get_class_methods($maClass)) . '<br>';

$maClass->calcul();
