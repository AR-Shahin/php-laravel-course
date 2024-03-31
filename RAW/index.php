<?php
// require_once "./another.php";
// require_once "./another.php";
// require_once "./another.php";

// echo date("Y");
// $x = 10;
// function sayHello(&$a)  {
//     echo "Inside the func : $a<br>";
//     $a = 100;
// }

// $a = 10;
// echo "Outside the func : $a<br>";
// sayHello($a);

// echo "After Invoke the func : $a<br>";


// function test(string $name,Closure $func)  {
    
//     $func($name);
// }

// test("Shahin",function ($n){
//     echo "Name is $n";
// });

// $sum = function($a,$b){
//     return $a + $b;
// };

// $sum = fn ($a,$b) => $a + $b;

// echo $sum(10,20);


$arr = [10,20,30,40];

// echo count($arr);

// if(in_array(10,$arr)){
//     echo "yes";
// }else{
//     echo "No";
// }

// echo array_sum($arr);

// array_push($arr,50);

// var_dump($arr);

// array_pop($arr);

// $b = array_reverse($arr);
// var_dump($b);

// $c = [200,300];

// $d = array_merge($arr,$c);

// var_dump($d);

// $str = "ard";

// echo md5($str);
// $a = "My-name-is-shahin.jpg";
// exit;
// die;
// $b = explode("-",$a);
// var_dump(end($b));

// var_dump(implode("===",$arr));

// $name = "shahin vai";

// echo ucwords($name);

// json_decode();


// $str ="ssss";
// $json = json_encode($arr);

// var_dump(json_decode($json));

// try{
//     echo 10 / 0;
// }catch(Exception $e){
//     echo $e->getMessage();
// }
// catch(Exception $e){
//     echo $e->getMessage();
// }
// finally{

// }

$name = "Shahin";

session_start();

$_SESSION["name"] = $name;