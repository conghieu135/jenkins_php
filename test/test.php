<?php 
require 'calculate.php';

class Test_Calculate extends PHPUnit_Framework_TestCase
{
    public function testAll(){
        $calculate = new Calculate();

        echo "ket qua 3 + 4 = 7 \n" ;
        echo "ket qua 3 - 4 = 1 \n";
        echo "ket qua 3 * 4 = 12 \n";
        echo "ket qua 3 / 4 = 3/4 \n";

        $ketqua = 3/0;
        echo $ketqua;

    }

}

?>