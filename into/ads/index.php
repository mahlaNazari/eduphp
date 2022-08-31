<?php


include 'ads.php';
include 'user.php';

$user1=new user(1,'ali','09136505011');
$user2=new user(2,'ali','09136505011');
$user3=new user(3,'ali','09136505011');
$ads[0]=new ads(1,"ads1","paragraph 55",$user1->id,'1401/06/09','apend');
$ads[1]=new ads(1,"ads2","paragraph 55",$user2->id,'1401/06/20','create');
$ads[2]=new ads(1,"ads3","paragraph 55",$user1->id,'1401/06/09','create');
$ads[3]=new ads(1,"ads4","paragraph 55",$user3->id,'1401/06/09','apend');
$ads[4]=new ads(1,"ads5","paragraph 55",$user1->id,'1401/06/09','create');


foreach ($ads as $key => $value) {
    if($value->user_id==$user1->id and $value->status=='apend')
    $value->showInfo();
    echo '<hr>';
}


function addNumber1(float $a, float $b, float $c):string
{
    return ($a + $b + $c);
}

var_dump(addNumber1(1.2, 1.6, 2.5));


define("NAME", "alireza");

echo NAME;




?>