<?php

namespace inc;
abstract class userModel{

    public $name;
    protected $family;
    protected $age;
    static $type=20;

    public function __construct($name,$family,$age)
    {
        $this->name=$name;
        $this->family=$family;
        $this->age=$age;
    }
    
    protected function printInfo(){

        return $this->name." ".$this->family." ".$this->age;
    }
    public function getInfo()
    {
        return $this->printInfo();
    }

    abstract public function relationship($status):string;
   
}