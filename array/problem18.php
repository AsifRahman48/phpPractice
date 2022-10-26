<!--Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.-->
<!--('x', 'y', 'y'), (10, 20, 30)-->

<?php
function combine_array($keys,$values)
{
    $result=array();
    foreach ($keys as $i=>$k)
    {
      $result[$k][]=$values[$i];
    }
    array_walk($result,create_function('$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
    return $result;
}
$key=array('x', 'y', 'y');
$value=array(10, 20, 30);
echo "<pre>";
print_r(combine_array($key,$value));
?>