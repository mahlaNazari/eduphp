<?php
declare(strict_types=1);
ECho "hello wordhhh..?</br>";


function sum(int $a,int $b){

    return $a+$b;
}

echo sum(1,4);


$color="yellow";
echo "the color is".$color."!</br>";
echo "end</br>";

$x=4;
$y=10;
echo $x+$y;
var_dump($x);
echo"</br>";

$c=1;
$d=6;
function Test(){
global $c,$d;
//$d=$c+$d;
$GLOBALS['d']=$GLOBALS['c']+$GLOBALS['d'];
}
Test();
echo $d;

function Test1(){
    static $xx=1;
    echo $xx;
    $xx++;
}
echo "</br>";
Test1();
echo"</br>";
Test1();
echo "</br>";
Test1();
echo "</br>";

$cars=array("pride",1,10.5);
var_dump($cars);

class car{
    public $color;
    public $model;
    public function __construct($color,$model){
$this->color=$color;
$this->model=$model;
    }
    public function message(){
        return "</br>the car ".$this->model. " is " .$this->color. " ! ";
    }
}
$mcar=new car("red","pride");
echo $mcar->message();

echo "</br>";
$str1="good morning...";
echo strlen($str1);
echo "</br>";
echo str_word_count($str1);
echo "</br>";
echo strrev($str1);
echo "</br>";
echo strpos($str1,"ning");
echo "</br>";
echo str_replace("morning","night",$str1);
echo "</br>";
$x=155;
var_dump(is_int($x));
echo "</br>";
$cd="1125.363";
var_dump(is_numeric($cd));
echo "</br>";
$d=(int)$cd;
echo $d;
echo "</br>";
echo(MAX(100,-10,50,5,-8));
echo "</br>";
echo(sqrt(105));
echo "</br>";
echo(rand(10,100));
echo "</br>";
define("colors",["red","blue"]);
echo colors[0];
echo "</br>";
define("GRT","hello wrd");
function test11(){
    echo GRT;
}
test11();
echo "</br>";
$y=1;
while($y<=6){
    echo "the num is $y !<br>";
    $y++;
}
echo "</br>";
for($x=1;$x<=50;$x+=15){
    echo "the number is: $x <br>";
}
echo "</br>";

$color=array("c1"=>"red","c2"=>"blue","c3"=>"yellow");
foreach($color as $x=>$val){
    echo "$x = $val <br>";
}
echo "</br>";


function addNum(int $a,int $b){
    return $a+$b;
}

echo addNum(6,2);
echo "</br>";

 function addNumber1(float $a,float $b,float $c):int{
     return (int)($a + $b + $c);
 }

?>

