<?php
ini_set('display_errors', 'on');
ini_set('error_reporting', E_ALL);
// question 1
echo "<br> practical 1 <br>";
$array = array(1 => 0, 2, 7 => 3, 4);
$array2 = array_merge(array('a'), array_slice($array, 2));
array_splice($array, 3, count($array), $array2);
print_r($array);

// question 2
echo "<br> practical 2 <br>";
$array = array('' => 3, true => 2, false => 3, 0 => 4, NULL => 5);
$array2 = array_merge(array(10, 20, 30), array_slice($array, 2)); 
next($array2); 
array_splice($array, 0, key($array2), $array2); 
print_r($array);

// question 4
echo "<br> practical 4 <br>";

function array_merges($a, $b) 
{
    return array_intersect($a, $b);
}

$a = array(1, 2, 3);

$b = array(2, 3, 4);

var_dump(array_merges ($a, $b));

// question 6
echo "<br> practical 6 <br>";

function f($a) {
    return "\$$a";
}

$a = "b";

$b = "c";

$c = "d";

$str = "\$d = " . f(f("a")) . ";";
eval($str);
echo $d;

// question 7

echo "<br> practical 7 <br>";
class MyClass1 {

function construct() { 
    echo 'This is MyClass1';
    // class MyClass2 {}
} 
}
class Myclass extends MyClass1 { 
    function construct() 
    { 
        echo 'This is MyClass';
    }
}

// question 8

echo "<br> practical 8 <br>";

class Counter {
    public static $calc = 0;
    public function inc() {
        self::$calc++;
    }
    public function print_calc() {
        echo self::$calc;
    }
}
$counter = new Counter();
$counter->inc();
$counter->print_calc();

// question 9

echo "<br> practical 9 <br>";

class A {
    function foo() {
        echo __CLASS__;
    }
}

trait B {
    function foo() {
        echo "B";
    }
}

trait C {
    use B;
    function FOO() {
        echo "C";
    }
}

class D extends A{
    use C;
}

$d = new D();
$d->foo();