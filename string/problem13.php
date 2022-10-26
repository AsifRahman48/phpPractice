<!--Write a PHP script to print the next character of a specific character.-->
<!--Sample character : 'a'-->
<!--Expected Output : 'b'-->
<!--Sample character : 'z'-->
<!--Expected Output : 'a'-->

<?php
$cha = 'e';
$next_Cha=++$cha;

//echo $next_Cha;
if (strlen($cha)>1)
{
    $next_Cha=$next_Cha[0];
}
echo $next_Cha;
?>