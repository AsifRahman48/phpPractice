<!--Write a PHP script to get the shortest/longest string length from an array. -->
<!--Sample arrays : ("abcd","abc","de","hjjj","g","wer")-->
<!--Expected Output : The shortest array length is 1. The longest array length is 4.-->

<?php
$array=array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $array);

echo '<pre>';
print_r($new_array);

echo "The shortest array length is ".min($new_array).'<br>';
echo "The shortest array length is ".max($new_array).'<br>';

?>