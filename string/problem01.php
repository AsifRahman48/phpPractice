<?php
//Write a PHP script
//a) transform a string all uppercase letters.
//b) transform a string all lowercase letters.
//c) make a string's first character uppercase.
//d) make a string's first character of all the words uppercase.

$str="hello i am Asif";

echo strtoupper($str)."<br>";
echo strtolower($str)."<br>";
echo ucfirst($str)."<br>";
echo ucwords($str);



?>