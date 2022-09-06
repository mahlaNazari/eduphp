<?php

spl_autoload_register(function($classname){

    include_once $classname."php";
});




new alireza();