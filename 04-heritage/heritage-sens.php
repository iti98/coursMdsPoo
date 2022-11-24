<?php

class A {
    public function test1()
    {
        return 'J\'affiche test 1';
    }
}

class B extends A
{
        public function test2()
        {
            return 'J\'affiche test2';
        }
}


class C extends B{
    public function test3()
    {
        return 'J\'affiche test 3';
    }
}


$maClass = new C;

echo print_r(get_class_methods($maClass)).'<br>';
echo $maClass->test1();
echo $maClass->test2();