<?php


class Person{
    public $id;
    public $name;
    public $email;
    public function __construct($id,$name,$email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function display()   
    {
        echo "EMPLOYEE ID : " . $this->id ."<br/>";
        echo "NAME : " . $this->name ."<br/>";
        echo "EMAIL : " . $this->email ."<br/>";
    }

    // class object

}
$person = new Person(20025,"Muhammad Abdullah Baig","bsce20025@itu.edu.pk");
$person->display();



























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


for($i =1 ;$i<=10;$i++){
    echo "index : ". $i;
    echo "<br/>";
}

echo "While Loop <br/>";
echo "<br/>";

$w =1;
while($w <= 10){
    echo "while loop value of index : ". $w;
    $w++;
    echo "<br/>";
}
echo "<br/>";
echo "For Each Loop <br/>";
echo "<br/>";

$av = ["new","old","between"];
foreach ($av as $key) {
    echo " --> " . $key;
    echo "<br/>";
}

echo "<br/>";
echo "do while Loop <br/>";
echo "<br/>";
$a =1;
do {
   echo "do while loop value of index : ". $a;
   $a++;
   echo "<br/>";
} while ($a <= 10);

echo "<br/>";
echo "**** end ***** <br/>";



echo "***** OOP IN PHP ***** <br/>";

