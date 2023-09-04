<?php

/* Create a class */
class StringUtility{
    private $string, $search;
    public function __construct($string)
    {
        $this->string=$string;
    }
    /* Create an search method */
    public function search ($string){
         $this->search=$string;
         return $this;
    }
    /* Create an replace method */
    public function replace ($string){
        if (!isset($this->search)) {
            echo ("Nothing to search");
        }
        $this->string=str_replace($this->search, $string , $this->string);
    }
    /* Create an Print method */
    function print(){
        echo $this->string;
    }
}

/* Create an Object */
$std=new StringUtility("Hello World");

$std->search("World");
$std->replace('Rakib');
$std->print();

