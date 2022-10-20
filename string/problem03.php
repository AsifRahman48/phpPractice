<!--Write a PHP script to check whether a string contains a specific string?-->
<!--Sample string : 'The quick brown fox jumps over the lazy dog.'-->
<!--Check whether the said string contains the string 'jumps'.-->

<?php
$str='The quick brown fox jumps over the lazy dog.';

if (strrchr($str,"jumps")==true)
{
    echo "jumps is present";
}
else
{
    echo  "jumps is not present";
}



if (strpos($str,"jumps")==true)
{
 echo "jumps is present";
}
else
{
   echo  "jumps is not present";
}

?>