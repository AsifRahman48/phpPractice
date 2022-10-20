<!--Write a PHP script to insert a string at the specified position in a given string.-->
<!---->
<!--Original String : 'The brown fox'-->
<!--Insert 'quick' between 'The' and 'brown'.-->
<!--Expected Output :The quick brown fox-->
<?php
$str='The brown fox';
echo substr_replace($str,'quick ',4,0);

?>