<!--Write a simple PHP class which displays the following string.-->
<!---->
<!--'MyClass class has initialized !'-->

<?php
class myClass
{
   function __construct()
   {
       echo 'MyClass class has initialized !';
   }
}
$class=new myClass;
?>