<!--Write a PHP script which decodes the following JSON string.-->
<!--Sample JSON code :-->
<!--{"Title": "The Cuckoos Calling",-->
<!--"Author": "Robert Galbraith",-->
<!--"Detail": {-->
<!--"Publisher": "Little Brown"-->
<!--}}-->
<!--Expected Output :-->
<!--Title : The Cuckoos Calling-->
<!--Author : Robert Galbraith-->
<!--Publisher : Little Brown-->

<?php

function fun($key,$value)
{
    echo "$value: $key";
}
$a='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
        "Publisher": "Little Brown"
}}';

$j=json_decode($a,true);
array_walk_recursive($j,'fun');
?>