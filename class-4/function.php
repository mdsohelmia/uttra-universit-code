<?php



$array = [
    12,
    'name' => 'sabuj',
    'age' => 18,
    'phones' => [
        'banglalink' => '019382548345',
        'gp' => '01770147',
    ],
];
//foreach ($array as $item) {
//    if (is_array($item)) {
//        foreach ($item as $value) {
//            echo $value.'<br/>';
//        }
//    } else {
//        echo $item.'<br/>';
//    }
//}

//$name = function () {
//    return 'Name';
//};
//
//$name1 = $name;

//var_dump($name1());
//
////$number = 10;
//
////1,2,3,4,5,6,7,8,9,10
////
////for ($i = 2; $i < $number; $i++) {
////    for ($j=$i; $i<$)
////}

//dd(array_values($array));

$numbers = ['a', 'b', 'c', 'd', 'f', 'e'];
//dd(end($numbers));

$eventNumber = array_map(function ($item) {
    if (in_array($item, ['a', 'e', 'i', 'o', 'u'])) {
        return strtoupper($item);
    }
}, $numbers);

//dd($eventNumber);

$image_string = 'sdfr0350350.00.4.45.5.jpg';

$img_array = explode('.', $image_string);
//dd($img_array);
//dd(end($img_array));

/**
 * @param string $greetign
 * @param string|null $name
 */
function say(callable $greetign, string $name = null)
{
    $name = 'kichu ekta ache';
    echo $greetign($name).' '.$name;
}








