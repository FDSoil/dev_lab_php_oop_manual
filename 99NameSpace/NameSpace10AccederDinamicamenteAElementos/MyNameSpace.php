<?php
namespace MyNameSpace;

include 'SubNivel.php';

class MyClass2
{
    function __construct()
    {
        echo __METHOD__."<br/>";
    }
}

function myFunction2()
{    
    echo __FUNCTION__."<br/>";
}

const MYCONST2 = "2<br/><br/>";

$a1 = '\MyClass1';
$obj1 = new $a1(); 
$b1 = '\myFunction1';
$b1(); 
//    echo constant("\MYCONST1");

$a2 = 'MyNameSpace\MyClass2';
$obj2 = new $a2(); 
$b2 = 'MyNameSpace\myFunction2';
$b2(); 
echo constant("MyNameSpace\MYCONST2");

$a3 = 'MyNameSpace\SubNivel\MyClass3';
$obj3 = new $a3(); 
$b3 = 'MyNameSpace\SubNivel\myFunction3';
$b3(); 
echo constant("MyNameSpace\SubNivel\MYCONST3");

