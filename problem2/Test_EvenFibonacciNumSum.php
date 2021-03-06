<?php
/*
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
**/

require("EvenFibonacciNumSum.php");

class Test_EvenFibonacciNumSum extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->limit = 4000000;
        $this->obj = new evenFibonaciNumSum();
    }
    
    public function testGenFibMethod()
    {
        // make sure generate sequence methods exists
        $this->assertTrue( method_exists($this->obj,'generateFibonacciSeq'), 'No method "generateFibonacciSeq" found.' );
        
        // we expect it to take a limit parameter
        $refl = new ReflectionMethod($this->obj, 'generateFibonacciSeq');
        $numParams = $refl->getNumberOfParameters();
        $this->assertEquals(1,$numParams, 'Method "generateFibonacciSeq" is expected to accept one parameter.');
        
        // we are expecting it to return an array
        $this->assertTrue( is_array( $this->obj->generateFibonacciSeq( $this->limit ) ), 'Method "generateFibonacciSeq" is expected to return an array.' );
        
        
    }
    
    public function testGenFibSeq()
    {
        
        // expect that fibanacci sequence values to match fibanacci rules
        $seq = $this->obj->generateFibonacciSeq( $this->limit );        
        
        $correctseq = false;
        for( $i = count($seq)-1; $i >=3; $i-- )
        {
            $a = $seq[$i-2];
            $b = $seq[$i-1];
            $c = $seq[$i];
            if( $a + $b != $c )
            {
                $correctseq = false;
                break;
            }
            else
                $correctseq = true;
        }
   
        $this->assertTrue( $correctseq, 'Sequence is not a fibonacci sequenece.' );
        
    }
    
    public function testGenFibLimit()
    {
        // expect that fibanacci sequence values does not exceed 4 million
        $seq = $this->obj->generateFibonacciSeq( $this->limit );        
           
        $inlimit = false;
        foreach($seq as $value)
        {
            if( $value > $this->limit )
            {
                $inlimit = false;
                break;
            }
            else
                $inlimit = true;
        }
        $this->assertTrue( $inlimit, 'Sequence contains values above the limit.' );
    }
    
    public function testEvenFibNumMethod()
    {
        
        // make sure methods exists
        $this->assertTrue( method_exists($this->obj,'evenFibonacciNumSum'), 'No method "evenFibonacciNumSum" found.' );
        
        // we expect it to take a limit parameter
        $refl = new ReflectionMethod($this->obj, 'evenFibonacciNumSum');
        $numParams = $refl->getNumberOfParameters();
        $this->assertEquals(1,$numParams, 'Method "evenFibonacciNumSum" is expected to accept one parameter.');        
        
    }
    public function testEvenFibNumSum()
    {
        
        // we are expecting it to return an interger
        $this->assertTrue( is_int( $this->obj->evenFibonacciNumSum()), 'Method "evenFibonacciNumSum" is expected to return an integer.' );
        
        // expect the sum of even numbers to be 4613732
        $this->assertEquals(4613732, $this->obj->evenFibonacciNumSum(), '"evenFibonacciNumSum" does not return the correct result.');
        
    }
    
}
?>