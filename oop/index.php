
<?php

include 'loader.php';

// echo userModel::$type;
// $user1=new userModel('alireza','sirizi',31);

$info = new ali\info();


// $user2=new employeModel('mahla','nazari',30,'hasan');

exit;
$user3=new techearModel('alireza','sirizi',31);


// echo $user1->getInfo();
echo $user2->getInfo();
echo "\n";
echo $user2->relationship('no');
echo PHP_EOL;
echo $user3->getInfo();
echo "\n";
echo $user3->relationship('oky');
echo "\n";
echo PHP_EOL;

echo $user3->printInfo1();
echo PHP_EOL;
echo $user3->like();

echo PHP_EOL;
echo $user3->block();

$info=new ali\info();
$info1=new app\user\info();


echo $info->getName();
echo $info1->getName();

$arrayelist=[1,3,66,55,788,25,24];


// replacerNumber::replaceNumberToCharecter($arrayelist);




