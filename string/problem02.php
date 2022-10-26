<?php
//Write a PHP script to split the following string
//Sample string : '082307'
//Expected Output : 08:23:07

$str='082307';

echo substr(chunk_split($str,2,':'),0,-1)."<br/>";

$str="abcdefghijklmnopqrstuvwxyz";
$res =chunk_split($str,1,' ');
echo $res."<br/>";
echo str_word_count($res);

?>