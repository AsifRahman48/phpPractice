<!--Write a PHP script to get the last three characters of a string.-->
<!--Sample String : 'rayy@example.com'-->
<!--Expected Output : 'com'-->

<?php
$str='rayy@example.com';
echo substr($str,-3)."<br>";
echo strrchr($str,"com")."<br>";

?>