<!--7. Write a PHP script that inserts a new item in an array in any position. Go to the editor-->
<!--Expected Output :-->
<!--Original array :-->
<!--1 2 3 4 5-->
<!--After inserting '$' the array is :-->
<!--1 2 3 $ 4 5-->

<?php
$arr=array(1 ,2 ,3 ,4, 5);
echo "Original array : <br>";
foreach ($arr as $list)
{
    echo $list;
}

echo "<br>After inserting '$' the array is :<br>";
array_splice($arr,3,0,'$');

foreach ($arr as $value)
{
    echo $value;
}
?>