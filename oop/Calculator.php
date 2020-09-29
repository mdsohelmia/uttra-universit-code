<?php


class Calculator
{
    private float $resualt = 0;


    public function setAddtion($num1,$num2){
        $this->resualt = $num1 + $num2;
    }

    public function sub($num1,$num2)
    {
        $this->resualt = $num1 - $num2;
    }

    public function getResualt()
    {
       return $this->resualt;
    }

}


$calucator= new Calculator();

$calucator->setAddtion(109000, 4334);

echo $calucator->getResualt();
echo "<br/>";
$calucator->sub(109000,4334);


echo $calucator->getResualt();