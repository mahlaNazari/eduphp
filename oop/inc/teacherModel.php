<?php

namespace inc;


class techearModel extends userModel implements User{

    use likeabel;
    public function relationship($status):string
    {
        if(property_exists(self::class, 'partnear'))
           return $this->name . ' relationship by ' . $this->partnear . " is " . $status;
         
         return $this->name. " not partner";
    }
    public function goTo($makan):string
    {
       return "go to $makan"; 
    }
    public function sleep(): string
    {
        return "sleeping...";
    }
    public function printInfo1(): string
    {
        return "man teacherm...";
    }
}