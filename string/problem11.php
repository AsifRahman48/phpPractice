<!--Write a PHP script to find the first character that is different between two strings.-->
<!--String1 : 'football'-->
<!--String2 : 'footboll'-->
<!--Expected Result : First difference between two strings at position 5: "a" vs "o"-->

<?php

$String1 = 'football';
$String2 = 'footboll';

$s= strspn($String1,$String2);

printf(' First difference between two strings at position $s: "%s" vs "%s"',$String1[$s],$String2[$s]);

?>