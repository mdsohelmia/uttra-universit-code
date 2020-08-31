<?php
////(1+3)-4*5/3)
//
//$a = 10;
//
//$b = 100;
////Arithmetic Operators
//
//// + - * / %
//
//$sum = $a + $b;
//
//echo $sum;
//echo "\n";
//echo $b - $a;
//echo "\n";
//echo $a * $b;
//echo "\n";
//echo $b / $a;
//echo "\n";
//echo $b % $a;
//echo "\n";
//echo 5 / 2;
//echo "\n";
$number = 9;


if ($number % 2 != 0) {
    echo "$number is odd";
} else {
    echo "$number is even:";
}
////assignment operator
////echo "\n";
////$hello = 'Hello';
////$d = 10;
////
////$d = $d - 10;
////$d -= 10;
////
////echo $d;
////echo "\n";
////$a = 1;
////$b = 2;
////$a = $b = $b + 3;
////
////echo $a;
////$name = 'Jon doe';
////
////echo $name.' good man';
////echo "\n";
////echo $a.$b;
//
////comparison operator or conditional operator
// == ===!= < > <= >=
$a = 100;
$b = 10;
echo gettype($a);
echo "\n";

//var_dump($a == $b);
//var_dump($a != $b);
//var_dump($a === $b);
//var_dump($a < $b);
//var_dump($b < $a);
//var_dump($a > $b);
//var_dump($b > $a);
//var_dump($a <= $b);
//var_dump($b <= $a);
//var_dump($a >= $b);
//var_dump($b >= $a);

var_dump(10 <=> 1);

$n = 2;
$checked = $n <=> 4;

if ($checked == -1) {
    echo "{$n} is less than 4";
} elseif ($n == 1) {
    echo "{$n} is greater than 4";
} else {
    echo "{$n} is equal 4";
}

// logical operator
// and or not | && || !
$username = 10;
$email = 10;
$limit = 10;

if ($username || $email) {
    echo "login process";
}

if (($username || $email) && $limit) {
    echo "login";
}

// true  true = true

// true false = false
// false  false = false
//false true = false

//string operator
echo "\n";
$name = 'sohel';

echo "Hello $name";








