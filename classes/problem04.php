<!--Calculate the difference between two dates using PHP OOP approach. -->
<!--Sample Dates : 1981-11-03, 2013-09-04-->
<!--Expected Result : Difference : 31 years, 10 months, 1 days-->

<?php
$sdata=new DateTime("1981-11-03");
$edata=new DateTime("2013-09-04");

$interval=$sdata->diff($edata);

echo "Difference :" .$interval->y." year ".$interval->m." month ".$interval->d." day ";
?>