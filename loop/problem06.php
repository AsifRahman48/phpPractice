<!--Write a program which will count the "r" characters in the text "w3resource".-->

<?php
$text="w3resource";
$search="r";
$count="0";

for ($i=0;$i<strlen($text);$i++)
{
    if (substr($text,$i,1)==$search)
    {
        $count=$count+1;
    }
}

echo $count;

?>