<!--Write a function to calculate the factorial of a number (a non-negative integer).
The function accepts the number as an argument.-->

<?php

function factorial($f)
{
    if ($f==0)
    {
        return 1;
    }
    else
    {
       return $f *factorial($f-1) ;
    }
}
echo factorial(7);

?>