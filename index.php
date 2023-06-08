<?php
//echo 'hello world' ;



$name = "'Aleksei'";
$age = 20;
$hobby = 'fishing';
$IsMarried = true;
$pet = 'cat';
$petName = 'Bars';

//
//echo $name . "\n";
//echo $age . "\n";
//echo $hobby . "\n";
//echo $IsMarried . "\n";
//echo $pet . "\n";
//echo $petName . "\n";

//$nameFriend = 'Егор';
//$ageFriend = 20;
//$smokeFriend = true;
//$weightFriend = 'имеет';
//
//echo $nameFriend . "\n";
//echo $ageFriend . "\n";
//echo $smokeFriend . "\n";
//echo $weightFriend . "\n";

$person = [
   'name' => 'Aleksei',
    'age'  => 20,
    'hobby' => 'fishing' ,
    'is_married' => true,
    'pet' => 'cat',
    'pet_name' => 'Bars',
];

print_r($person['name']);

// это массив
// echo и print_r способы вывода. Echo работает со строками, для вывода массивов лучше print_r (он вообще все выводит)
