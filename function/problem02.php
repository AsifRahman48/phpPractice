<!--Write a function to check whether a number is prime or not. Go to the editor-->
<!--Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself-->

<?php
function is_prime($p)
{
    for ($i=2;$i<$p;$i++)
    {
        if ($p % $i == 0)
        {
            return 0;
        }
        return  1;
    }
}

if(is_prime(16)==0)
    echo "This is not a prime number ";
else
    echo "this is a prime number ";

?>