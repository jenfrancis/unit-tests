<?php

class Test_EvenFibonacciNumSum extends PHPUnit_Framework_TestCase
{
    function testEvenFibonacciNumSum(){
        
        $obj = new evenFibonaciNumSum();
        
        $this->assertTrue( method_exists($obj,'evenFibonacciNumSum'), 'No method "EvenFibonacciNumSum" found.' );
        
    }
}

class evenFibonaciNumSum{
    
    function evenFibonacciNumSum(){
        
    }
    
}

?>