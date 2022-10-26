<!--Write a PHP script to extract the file name from the following string-->
<!--Sample String : 'www.example.com/public_html/index.php'-->
<!--Expected Output : 'index.php'-->

<?php
$str='www.example.com/public_html/index.php';
echo strrchr($str,"index.php")."<br>";
echo substr(strrchr($str,"/"),1);

//if (strrchr($str,"index.php")==true)
//{
//    echo "true";
//}


?>