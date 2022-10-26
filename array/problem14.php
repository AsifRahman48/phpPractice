<!--Write a PHP function that returns the lowest integer that is not 0.-->

<?php

function array_not_zero(Array $value)
{
    return min(array_diff(array_map('intval',$value),array(0)));
}

print_r(array_not_zero(array(1,0,6,7,-1))) ;
?>