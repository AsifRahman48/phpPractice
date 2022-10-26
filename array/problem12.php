<!--Write a PHP script to generate unique random numbers within a range. -->
<!--Sample Range : (11, 20)-->
<!--Sample Output : 17 16 13 20 14 19 18 15 11 12-->

<?php

$range= range(11,20);
shuffle($range);

for($i=0;$i<10;$i++)
{
    echo $range[$i]." ";
}

?>