<?php

// echo "Hello World <br>";
// print "Text <br>";

$varName = 10;
$varName = 10.8;
$varName = "hello ";
// $varName = true;

// echo gettype($varName);
$a = 10;
define("PI",3.14);


// echo $varName . "Shahin {$a}" ;
// var_dump((string)$a);

// $arr = range(1,10);

// echo __LINE__;
// echo __DIR__;
// echo __FILE__;

// echo $a + $a;


// if($a%2==0){
//     echo "EVEN";
// }else{
//     echo "ODD";
// }

// echo $a%2 == 1 ? "EVEN" : "ODD";


// switch ($ex) {
//     case 1:
//       //code block
//       break;
//     case 2:
//       //code block;
//       break;
//     case 3:
//       //code block
//       break;
//     default:
//       //code block
//   }

// $i = 1;
// while($i<=5){
//     echo "$i ";
//     $i++;
// }

// for($i=1;$i<=5;$i++){
//     echo "$i ";
// }


$arr = [10,20,30];
$brr = [10,20,30,[10,20,30],"shahin"];
$users = [
    "name" => "Shahin",
    "name" => "ARS",
    "name" => "TEST",
    "name" => "Foo",
];

// foreach($users as $user){
//     echo $user;
// }
$colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $key => $x) {
//   echo "$key -> $x <br>";
// }

// for($i = 1;$i<=10;$i++){
//     if($i==5){
//         continue;
//     }
//     echo $i . " ";
// }

function sum(int $a,int $b):float{
    return $a + $b;
}

function hello($name,$email) {
    echo $name . " " . $email;
}

// sum("10",20);

hello(email: "ars@mail.com",name:"ars");