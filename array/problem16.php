<!--Write a PHP program to filter out some elements with certain key-names.Go to the editor-->
<!--Test Data :-->
<!--1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')-->
<!--2nd array : ('c2', 'c4')-->
<!--Output :-->
<!--Array-->
<!--(-->
<!--[c1] => Red-->
<!--[c3] => White-->
<!--)-->

<?php
$array1=array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$array2=array('c2', 'c4');
echo '<pre>';
print_r(array_diff_key($array1,array_flip($array2)));

?>