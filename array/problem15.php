<!--Write a PHP script to print "second" and Red from the following array. Go to the editor
Sample Data :
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));-->

<?php
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));

echo $color["holes"][5]."<br>".$color["color"]["a"]."<br>".$color["numbers"]["5"];
?>