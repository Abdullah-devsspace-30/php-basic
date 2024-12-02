<?php
echo "***** OOP IN PHP ***** <br/>";

class Person
{
    public $id;
    public $name;
    public $email;
    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function display()
    {
        echo "EMPLOYEE ID : " . $this->id . "<br/>";
        echo "NAME : " . $this->name . "<br/>";
        echo "EMAIL : " . $this->email . "<br/>";
    }

    // class object

}
$person = new Person(20025, "Muhammad Abdullah Baig", "bsce20025@itu.edu.pk");
$person->display();



echo "<br/>";
echo "<br/>";
echo "<br/>";


echo "***** INHERITANE IN PHP ***** <br/>";


class ParentClass
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class ChildClass extends ParentClass
{
    public $childname;
    public function __construct($childname,$parent_name)
    {
        $this->childname = $childname;
        $this->name = $parent_name;
    }
    public function display()
    {
        echo $this->childname . " " . $this->name . "<br/>";
    }
}

$child =  new ChildClass("Smith", "Alan");
$child->display();

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

trait messag1{
    public function display(){
        echo "Hello, I am a trait method <br>";
    }
}

trait messag2{
    public function display2(){
        echo "hello, i am trai2 <br/>";
    }
}
class Welcome{
    use messag1;
    use messag2;
    public function __construct() {
    }
}
$wel =  new Welcome();
$wel->display();
$wel->display2();




















$string = "hello world";
echo $string;
echo "<br/>";


$num = 12;
echo $num;
echo "<br/>";


$float = 12.34;
echo $float;
echo "<br/>";


$bool = false;
echo $bool;
echo "<br/>";


echo "**** understanding OOP **** <br/>";
echo "<br/>";

echo "For Loop <br/>";
echo "<br/>";


for ($i = 1; $i <= 10; $i++) {
    echo "index : " . $i;
    echo "<br/>";
}

echo "While Loop <br/>";
echo "<br/>";

$w = 1;
while ($w <= 10) {
    echo "while loop value of index : " . $w;
    $w++;
    echo "<br/>";
}
echo "<br/>";
echo "For Each Loop <br/>";
echo "<br/>";

$av = ["new", "old", "between"];
foreach ($av as $key) {
    echo " --> " . $key;
    echo "<br/>";
}

echo "<br/>";
echo "do while Loop <br/>";
echo "<br/>";
$a = 1;
do {
    echo "do while loop value of index : " . $a;
    $a++;
    echo "<br/>";
} while ($a <= 10);

echo "<br/>";
echo "**** end ***** <br/>";
