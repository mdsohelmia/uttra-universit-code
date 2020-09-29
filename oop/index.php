<?php
// require_once './Calculator.php';

// require_once './Car.php';

require_once __DIR__.'./User/User.php';

require_once 'User.php';

use App\User\User;

use Sohel\User as SohelUser;


// class  Person
// {

//     private string $name = '';

//     private int $age  = 0;

//     private string $gender = '';

//     public function setName(string $name)
//     {
//         $this->name = strtolower($name);
//     }

//     public function setAge(int $age)
//     {
//         $this->age = $age;
//     }
//     public function setGender($gender)
//     {
//         $this->gender = $gender;
//     }


//     public function getName()
//     {
//         return $this->name;
//     }

//     public  function speak(): string
//     {
//         return 'I can speak' . "<br>";
//     }
// }


// $person = new Person;

// print $person->speak();
// echo "<br/>";


// $person->setName('SUJON');
// $person->setAge(14);
// $person->setGender('Male');

// echo $person->getName();


$appUser = new User;

$appUser->getUsr();

$sohelUser = new User();

$sohelUser->getUsr();
