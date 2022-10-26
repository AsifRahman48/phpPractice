<!--$color = array('white', 'green', 'red')-->
<!--Write a PHP script which will display the colors in the following way :-->
<!--Output :-->
<!--white, green, red,-->

<!--green-->
<!--red-->
<!--white-->

<?php
$color = array('white', 'green', 'red');

foreach ($color as $value)
{
    echo $value.",";
}

sort($color);

foreach ($color as $list)
{
    echo "<ul>";

    echo "<li>$list</li>";

    echo "</ul>";
}
?>