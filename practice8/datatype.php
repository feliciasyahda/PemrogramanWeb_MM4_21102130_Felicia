<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
var_dump($x);
?>

<?php
echo "<br>";
?>

<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

<?php
echo "<br>";
?>

<?php  
$x = 10.365;
var_dump($x);
?>  

<?php
echo "<br>";
?>

<?php 
$x = true;
var_dump($x);
?>

<?php
echo "<br>";
?>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

<?php
echo "<br>";
?>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

</body>
</html>
