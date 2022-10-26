<!--Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.-->
<!---->
<!--For example :-->
<!--$mycalc = new MyCalculator( 12, 6);-->
<!--echo $mycalc- > add(); // Displays 18-->
<!--echo $mycalc- > multiply(); // Displays 72-->

<?php
class myCalculator
{
    public $a;
    public $b;

    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    public function add()
    {
      return  $this->a+$this->b;
    }
    public function sub()
    {
        return  $this->a-$this->b;
    }
    public function multiply()
    {
        return  $this->a*$this->b;
    }
    public function divide()
    {
        return  $this->a/$this->b;
    }

}
$calculator=new myCalculator(20,10);
echo "sum:".$calculator->add()."<br>";
echo "sub:".$calculator->sub()."<br>";
echo "multiply:".$calculator->multiply()."<br>";
echo "divide:".$calculator->divide()."<br>";


?>