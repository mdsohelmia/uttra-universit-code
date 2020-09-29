<?php
namespace App\Controller;
use App\Cat;
use App\Animale;

class AnimaleController
{
    public function show()
    {
    $animale = new Animale();

        $animale->eat();
    }
}