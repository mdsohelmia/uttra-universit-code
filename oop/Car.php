<?php
class Engine
{
    protected $name='agrong';

    protected function startEngine()
    {
           echo "start engine <br/>";
    }
}



class CarBlue extends Engine  {

    public function run()
    {
        $this->startEngine();
        echo "Car is running";
    }

}

$carBlue = new CarBlue();


$carBlue->run();
