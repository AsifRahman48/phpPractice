<!--Write a PHP class that sorts an ordered integer array with the help of sort() function.-->
<!--Sample array : array(11, -2, 4, 35, 0, 8, -9)-->
<!--Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )-->

<?php
class array_sort
{
    protected $_asort;

    public function __construct(array $asort)
    {
        $this->_asort = $asort;
    }
    public function alhsort()
    {
        $sorted = $this->_asort;
        sort($sorted);
        return $sorted;
    }
}
$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
echo '<pre>';
print_r($sortarray->alhsort())."\n";

?>