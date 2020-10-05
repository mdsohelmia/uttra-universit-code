<?php

//class Person
//{
//    public $name = '';
//
//    public function canWrite()
//    {
//        echo "{$this->name}You are writing";
//    }
//
//    public function canEeat()
//    {
//        echo "{$this->name}You are eating";
//    }
//}
//
//$rakib = new Person();
//$rakib->name = 'rakib';
//$rakib->canEeat();
//echo "<br/>";
//
//$subj = new Person();
//$subj->name = 'subuj';
//$subj->canEeat();
//
//echo "<br/>";
//
//class Dog
//{
//    public $name = '';
//    public function canRun()
//    {
//        echo "{$this->name}You are writing";
//    }
//
//    public function canEeat()
//    {
//        echo "{$this->name}You are eating";
//    }
//}
//
//$dog = new Dog();
//
//$dog->name = 'tommy';
//$dog->canEeat();

class  QueryBuilder
{
    private $pdo = null;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=hrm', 'root', '');
    }

    public function all(string $table)
    {
        $sql = "SELECT * FROM {$table} ";

        $stm = $this->pdo->query($sql);

        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $id)
    {
        $sql = "SELECT * FROM {$table} where employee_id={$id}";
        $stm = $this->pdo->query($sql);

        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}

$query = new QueryBuilder();

    $countries = $query->all('countries');
//echo "<pre>";
//var_dump($countries);
//
//echo "</pre>";

//$employees = $query->all('employees');
//
//echo "<pre>";
//var_dump($employees);
//
//echo "</pre>";

$employee = $query->find('employees', 200);
echo "<pre>";
var_dump($employee);
echo "</pre>";


