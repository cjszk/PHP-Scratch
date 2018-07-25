<?php

// $message = "Hello again!";
// $count = 3;
// $price = 1.99;

// var_dump($message);
// var_dump($count);
// var_dump($price);

// $is_admin = true;
// $data = null;

// var_dump($is_admin, $data);

// $price = 2.95;
// $quantity = 5;

// var_dump($price * $quantity);

// $string1 = "hello";
// $string2 = "blah";
// $string3 = $string1 . ' ' . $string2;

// var_dump($string3);

// $is_editor = true;
// $is_admin = false;

// var_dump($is_editor or $is_admin);
// var_dump($is_editor and $is_admin);

// $name = "Chris";
// $age = 28;
// $status = true;
// $new_age = $age + 10;
// $sentence = $name . " is " . $age . " and knows PHP!";

// echo $sentence;

// $articles = [ 1 => "First post", 5 => "Another post", 4 => "Read this!", "Test"];
// $associative_array = [ 
//     "first" => "First post", 
//     "second" => "Another post", 
//     "third" => "Read this!"
// ];

// var_dump($articles);
// var_dump($associative_array);

// $values = [
//     "message" => "Hello world!",
//     "count" => 150,
//     "float" => 3.14,
//     "status" => false,
//     "result" => null
// ]

// $count = 3;
// $value = 9.99;

// $values = [
//     $count,
//     $value
// ];

// // var_dump($values);

// foreach($values as $value) {
//     echo($value . ' ');
// }

// foreach($values as $index => $value) {
//     echo('index: ' . $index . ' value: ' . $value . ' ~ ');
// }

// $array = [
//     "herpa",
//     "derpa",
//     "three" => "derp"
// ];

// foreach($array as $index => $item) {
//     echo "$index = $item.";
// }

// $array = ['blah', 'Another'];

// // var_dump(empty($array));

// if (empty($array)) {
//     echo "The condition is true";
// } else {
//     echo "The condition is false";
// }

// $articles = [];

// var_dump(empty($articles));

// if (empty($articles)) {
//     echo "The array is empty";
// }

// var_dump(3 == 4);
// var_dump(4 == 4);

// $month = 1;

// while ($month <= 12) {
//     echo $month . ", ";
//     $month = $month + 1;
// }

// for( $i=1; $i <= 30; $i += 1 ){
//     echo " " . $i . ", ";
// }

// $hour = 11;
// if ($hour < 12) {
//     echo "Good Morning";
// } elseif ($hour < 18) {
//     echo "Good Afternoon";
// } elseif($hour < 22) {
//     echo "Good Evening";
// } else {
//     echo "Good Night";
// }

// $day = "Tue";

// switch ($day) {
//     case "Mon":
//         echo "Monday";
//         break;
//     case "Tue":
//         echo "Tuesday";
//         break;
//     case "Wed":
//         echo "Wednesday";
//     default:
//         echo "Not Mon or Tue or Wed"
// }

$array = [];

for ($i = 1; $i <= 10; $i++) {
    // Put your code here

    if ($i < 4) {
        $array[$i] = 'a';
    } elseif ($i <= 7) {
        $array[$i] = 'b';
    } else {
        $array[$i] = 'c';    
    }
}

foreach ($array as $item) {
    echo $item;
}