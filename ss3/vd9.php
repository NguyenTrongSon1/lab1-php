<?php
class Greeting{
    private  $work = "Hello";
}
$closure = function ($whom){
    echo "$this -> word $whom\n";
};
$obj = new Greeting();
$closure -> call($obj,'john');
$closure ->call($obj,'Kevin');
?>
