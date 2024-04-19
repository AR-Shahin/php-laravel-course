<?php

$x = 10;

function test()  {
    echo $GLOBALS["x"];
}

// test();


// echo $_SERVER['PHP_SELF'] ."<br>";
// echo $_SERVER['SERVER_NAME'] ."<br>";
// echo $_SERVER['HTTP_HOST'] ."<br>";
// echo $_SERVER['HTTP_USER_AGENT'] ."<br>";
// echo $_SERVER['SCRIPT_NAME'] ."<br>";

// echo $_SERVER['SERVER_PROTOCOL'] . "<br>";

// echo $_SERVER['REQUEST_METHOD'];
$errors = [];
if(isset($_REQUEST["btn"])){

    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     echo $_POST["name"];
    // }

    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];

    if(empty($name)){
        $errors["name"] = "Name is Empty";
    }
    if(empty($password)){
        $errors["password"] = "Password is Empty";
    }

    if(!count($errors)){
        echo "Send data in the DB";
    }else{
        echo "Validation Error!";
        var_dump($errors);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="name"> <span style="color: red;"><?= $errors["name"] ?? "" ?></span> <br>

    <input type="password" name="password"> <span style="color: red;"><?= $errors["password"] ?? ""?></span> <br>

    <button name="btn" type="submit">Submit</button>
    </form>
</body>
</html>