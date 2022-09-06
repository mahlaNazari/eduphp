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

     function addFive(&$number){
        $number+=5;
     }
     $val=8;
     addFive($val);
     echo $val;

echo "</br>";
     $colors=array("red","blue","yellow","brown");
     $lenght=count($colors);

     for($x=0;$x<=$lenght;$x++){
        echo $colors[$x];
        echo "<br>";
     }

     $age=array("p"=>"1","b"=>"2","c"=>"3");
     foreach($age as $x=>$x_val){
        echo "key is :". $x ." and value is :". $x_val ;
echo "<br>";
     };

     $cars=array(
        array("pride",10,20),
        array("mazda",15,30),
        array("bmw",30,40)
     );

//      for($num=0;$num<4;$num++){
// echo "<h>row is : $num</h>";
// echo "<ul>";
// for($x=0;$x<=3;$x++){
// echo "<li>". $car[$num][$x] ."</li>";
// }
// echo "</ul>";
//      }

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3;$col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}

$names=array("ali"=>22,"mohammad"=>30,"reza"=>15);
ksort($names);
foreach($names as $x=>$x_val){
    echo "name is: ".$x. " and age is : ".$x_val;
    echo "<br>";
}

$x=70;
$y=20;
function addNumber(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addNumber();
echo $z;

echo"<br>";
echo $_SERVER['PHP_SELF'];

echo "<br>";
$str="the Rain is fall in spain";
$pattern='/ain/i';
echo preg_match($pattern,$str);

echo "<br>";
//$ptr="/Rain/i";
echo preg_replace("/Rain/i",'snow',$str);

echo "<br>";
$str1="Apples and banana banana banana";
$patt='/ba(na){2}/i';
echo preg_match_all($patt,$str1);
echo "<br>";
$int=10;
$min=1;
$max=100;

// if(filter_var($int,FILTER_VALIDATE_INT)===0||!filter_var($int,FILTER_VALIDATE_INT)===false){
//     echo "int is valid";    
// } else {
//     echo "int is not valid";
// }
if(filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max))) === false){
    echo "variable is not valid";
}
else{
    echo "variable is valid";
}

echo "<br>";

$cars = array("Volvo"=>1, "BMW"=>2, "Toyota"=>3);
$car_en=json_encode($cars);
echo $car_en;
echo "<br>";
$car_dec=json_decode($car_en);
foreach($car_dec as $key=>$val){
    echo "key is : ".$key." and value is : ".$val;
    echo "<br>";
}
?>


