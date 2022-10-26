<!--Write a PHP function to check whether all array values are strings or not.-->

<?php
function check_string($arr)
{
    return array_sum(array_map('is_string',$arr))==count($arr);
}
$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');
var_dump(check_string($arr1));
var_dump(check_string($arr2));
?>