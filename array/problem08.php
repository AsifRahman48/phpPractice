<!--Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. Go to the editor-->
<!--Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73-->
<!--Expected Output :-->
<!--Average Temperature is : 70.6-->
<!--List of seven lowest temperatures : 60, 62, 63, 63, 64,-->
<!--List of seven highest temperatures : 76, 78, 79, 81, 85,-->

<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
     68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

     $count=count($temperatures);

     $sum=0;

     foreach($temperatures as $list)
     {
         $sum=$sum+$list;
         $avg=$sum/$count;
     }


     echo "sum=".$sum."<br>";
     echo "avg=".$avg."<br>";

  sort($temperatures);
     echo "Five Lowest Value :<br>";
     for($i=0;$i<5;$i++)
     {
        echo " ".$temperatures[$i];
     }

     //rsort($temperatures);
     echo "<br>Five higest  Value :<br>";
     for($i=($count-5);$i<$count;$i++)
     {
        echo " ".$temperatures[$i];
     }

?>