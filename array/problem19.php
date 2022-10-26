<!--Write a PHP function to compares two multidimensional arrays and returns the difference.-->
<?php
function key_compare($a,$b)
{
    if($a==$b)
    {
        return 0;
    }
    elseif ($a>$b)
    {
        return 1;
    }
    else
    {
        return -1;
    }
}
function multidimenssional_array_diff($arr1,$arr2)
{
   return array_diff_uassoc($arr1['c'],$arr2['c'],'key_compare');
}

$color1=array('a'=>'White','b'=>'Red','c'=>array('a'=>'Green','b'=>'Blue','c'=>'Yellow'));
$color2=array('a'=>'White','b'=>'Red','c'=>array('a'=>'White','b'=>'Red','c'=>'Yellow'));
echo "<pre>";
print_r(multidimenssional_array_diff($color1, $color2));
?>