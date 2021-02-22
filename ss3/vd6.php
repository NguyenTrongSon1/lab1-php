<?php
function e(){
    echo "THis is e() \n";
}
function f(){
    echo  "This is f() \n";
    return e();
}
function g(){
    echo "This is g() \n";
    return f();
}
g();
echo  "***********\n";
g()();
echo  "***********\n";
g()()();
?>
