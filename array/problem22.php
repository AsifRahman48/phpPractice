<!--Write a PHP function to set union of two arrays.-->
<?php
function array_union($x,$y)
{
    $result=array_merge(
        array_intersect($x,$y),
        array_diff($x,$y),
        array_diff($y,$x)

    );
    return $result;
}
$a = array(1, 2, 3, 4);
$b = array(2, 3, 4, 5, 6);
echo "<pre>";
print_r(array_union($a, $b));
?>