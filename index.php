<?php
include './config.php';

$name = "Tania";
$age = 21;
echo "Hello, $name! You are $age years old.<br>";

// Array
$numbers = array(1, 2, 3, 4, 5);
$person = array("name" => "Tania", "age" => 21);
echo $numbers[0], "<br>";
echo $person["name"], "<br>";

// explode, implode
$words = "The,first,rule,of,Fight,Club,is:,you,do,not,talk,about,Fight,Club.";
$wordsArray = explode(",", $words);
echo $wordsArray[0], "<br>";
echo implode(" ", $wordsArray), "<br>";

// Renaming
$var_name = "age";
$$var_name = 21;
echo $age, "<br>";

// Comparison
$a = 10;
$b = "5";
echo $a == $b ? "Equal<br>" : "Not equal<br>";

// Casting types
$str_num = "10";
$num = (int)$str_num;
echo $num, "<br>";

// ООP
class Person {
    public $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

// Inheritance, calling parent constructor
class Employee extends Person {
    private $position;

    public function __construct($name, $age, $position) {
        parent::__construct($name, $age);
        $this->position = $position;
    }

    public function getPosition() {
        return $this->position;
    }
}

// Objects
$person = new Person("Tania", 21);
echo $person->name, "<br>";

// Static methods
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }
}
echo Math::add(5, 3), "<br>";

// Magic methods
class MyClass {
    public function __toString() {
        return "This is a MyClass object.<br>";
    }
}
$obj = new MyClass();
echo $obj, "<br>";

setcookie("username", "Tania", time() + 3600, "/");

session_start();
$_SESSION["user_id"] = 123;

?>
