<!--Write a PHP script to extract the user name from the following email ID.-->
<!--Sample String : 'rayy@example.com'-->
<!--Expected Output : 'rayy'-->

<?php
$str='rayy@example.com';
echo substr($str,0,4)."<br>";
echo strstr($str,'@',true);


?>