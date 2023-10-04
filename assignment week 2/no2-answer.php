<?php 
class Fruits {
    publis $name;
    public $color;

    function set_name ($name){
        $this -> name =$name;
    }
    function get_name (){
        return $this-> name;
    }
}

$object = new fruits ();
$object -> set_name ("Apple");
echo $object -> get_name();

$object -> set_name ("Banana");
echo $object -> get_name();

$object -> set_name ("Orange");
echo $object -> get_name();

$object -> set_name ("Mango");
echo $object -> get_name();






?>