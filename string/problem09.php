<!--Write a PHP script to generate simple random password [do not use rand() function] from a given string.-->
<!--Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'-->
<!--Note : Password length may be 6, 7, 8 etc.-->

<?php
$str='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($str),0,8)."\n";

?>