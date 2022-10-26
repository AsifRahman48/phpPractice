<!--Write a PHP script to a convert string to Date and DateTime.-->
<!---->
<!--Sample Date : '12-08-2004'-->
<!--Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.-->

<?php
$date=DateTime::createFromFormat('m-d-Y','12-08-2004')->format('Y-m-d');

echo $date;


?>