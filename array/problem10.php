<!--Write a PHP script to sort the following associative array : Go to the editor-->
<!--array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in-->
<!--a) ascending order sort by value-->
<!--b) ascending order sort by Key-->
<!--c) descending order sorting by Value-->
<!--d) descending order sorting by Key-->

<?php
$arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "ascending order sort by value <br>";
asort($arr);
foreach ($arr as $key=>$list)
{
    echo "$key => $list <br>";
}
echo "ascending order sort by key <br>";
ksort($arr);
foreach ($arr as $key=>$list)
{
    echo "$key => $list <br>";
}

echo "descending order sorting by Value <br>";
arsort($arr);
foreach ($arr as $key=>$list)
{
    echo "$key => $list <br>";
}

echo "descending order sorting by key <br>";
krsort($arr);
foreach ($arr as $key=>$list)
{
    echo "$key => $list <br>";
}
?>