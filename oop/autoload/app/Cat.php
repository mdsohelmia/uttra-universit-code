<?php

namespace App;

class Cat extends Animale
{
    protected static $name = 'Mira';

    public static function sleep()
    {
        echo "I am sleeping".self::$name;
    }

    public function canEat()
    {
        echo $this->eat().' cat';
    }
}


