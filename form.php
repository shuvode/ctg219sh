<?php

$num1=$_POST['number1'];
$num2=$_POST['number2'];



function multiplyFunc($number1,$number2){
    $sum=$number1*$number2;
    echo"the multiplication of two numbers is: ".$sum;
    
}

multiplyFunc($num1,$num2);


?>