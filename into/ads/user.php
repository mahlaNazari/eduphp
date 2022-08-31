<?php
class User {

    public $id;
    public $name;
    public $phone;

     public function __construct($id,$name,$phone)
    {
        $this->id=$id;
        $this->name=$name;
        $this->phone=$phone;
    }

    

}