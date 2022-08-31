<?php
class ads 
{

    public $id;
    public $title;
    public $text;
    public $user_id;
    public $date_create;
    public $status;
    

    public function __construct($id, $title, $text,$user_id,$date_create,$status)
    {
        $this->id = $id;
        $this->title= $title;
        $this->text = $text;
        $this->user_id = $user_id;
        $this->date_create = $date_create;
        $this->status = $status;
    }

    public function chengeStatus($status)
    {
        $this->status= $status;
    }
    
    public function showInfo(){

      echo "<ul>
      <li>$this->id</li>
      <li>$this->title</li>
      <li>$this->text</li>
      <li>$this->user_id</li>
      <li>$this->date_create</li>
      <li>$this->status</li>
      </ul>
      ";
    }

    





}
