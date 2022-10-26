<!--Write a PHP script to get the filename component of the following path.-->
<!--Sample path : "https://www.w3resource.com/index.php"-->
<!--Expected Output : 'index'-->

<?php
$path="https://www.w3resource.com/index.php";

echo substr(strrchr($path,'/'),1,-4);


//Write a PHP script to remove a part of a string from the beginning.
//Sample string : 'rayy@example.com'
//Expected Output : 'example.com'

$str='rayy@example.com';

echo substr(strrchr($str,'@'),1);

?>