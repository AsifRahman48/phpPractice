<!-- Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. Go to the editor
Note : Do not use any PHP control statement.
Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248-->

<?php

echo implode(",",range(200,250,4));

?>