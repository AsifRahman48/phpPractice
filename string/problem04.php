<!--Write a PHP script to convert the value of a PHP variable to string.-->

<?php

$age=24;
var_dump($age);

echo "<br>";

$str=(string)$age;
var_dump($str);

echo "<br>";

if($age===$str)
{
    echo "They are same";
}
else
{
    echo "they are not same";
}
?>