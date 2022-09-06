<?php
namespace inc;
class employeModel extends userModel{

    
    protected $partnear;

    public function __construct($name,$family,$age,$partnear)
    {
        parent::__construct($name, $family, $age);
        $this->partnear = $partnear;
       
    }
    public function printInfo()
    {
        return $this->name . " " . $this->family . " " . $this->age . ' ' . $this->partnear;
    }
        
    public function print()
    {
       return $this->getInfo();
    }
    public function relationship($status):string
    {

        if($status!=="oky")
         return $this->name . ' ghahre ba ' . $this->partnear . " relationship  " . $status;

        return $this->name. ' relationship by '. $this->partnear ." is ".$status;
    }
}