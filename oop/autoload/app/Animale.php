<?php

namespace App;

class Animale implements AnimaleInterface
{
    public function eat()
    {
        return "I am eating";
    }

    public function run()
    {
        echo "I am running";
        //...
    }
}

