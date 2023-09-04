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

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/* Dependency injection 1st step */
interface BaseStudent{
    public function displayName(); //no body this function 
}
class Student implements BaseStudent{
    private $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function displayName()
    {
        echo "Hello ".$this->name;
    }
}

class StudentManager {
    public function introduceStudent($name){
        $student=new Student($name);
        $student->displayName();
    }
}

$student=new StudentManager();
$student-> introduceStudent("Rakib Mahmud");



