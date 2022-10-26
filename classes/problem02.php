<!--Write a simple PHP class which displays an introductory message like
"Hello All, I am Scott", where "Scott" is an argument value of the method within the class.-->

<?php
class intro
{
   public  $msg= "Hello All, I am";
   public function introduce($name)
   {
       return $this->msg.$name;
   }
}

$myMsg=new intro();
echo $myMsg->introduce(' Scott');
?>