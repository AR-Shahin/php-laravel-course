<?php

class User{

    public static $type = "Type";
    public function walk() {
        echo "<br>$this->name can Walk! <br>";
    }
    public static function play() {
        echo self::$type . "can Walk! <br>";
    }

    public function __construct(
        public string $name,
        public string $email,
        public string $age
    )
    {
        
    }

    // public function __destruct()
    // {
    //     echo "<br> I am from destruct!";
    // }


    function __call($name, $arguments)
    {
        echo "$name dosnt exist";
    }

    static function __callStatic($name, $arguments)
    {
        echo "$name dosnt exist";
    }

}

// echo User::$type;
User::test();
 $usr1 = new User("shahin","s@mail.com",280);
//  $usr2 = new User("Ars","a@mail.com",123);

// $usr1->name = "Shahin";
// $usr1->email = "Shahin@mail.com";

// $usr2->name = "Test";

// echo $usr1->name . "<br>";
// echo $usr2->name . "<br>";

// $usr1->walk();
// $usr2->walk();


class Human{

    function __invoke()
    {
        echo "Anything";
    }
}

// $a = new Human();

// $a();

// (new Human)();

// if($usr1 instanceof Human){
//     echo "Yes";
// }else{
//     echo "no";
// }

$usr1->abc();