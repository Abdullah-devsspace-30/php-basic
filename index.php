<?php


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

echo "**** end ***** <br/>";