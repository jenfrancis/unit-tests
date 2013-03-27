<?php
/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */

require("LrgPrime.php");

class Test_LrgPrime extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->obj = new LrgPrime();
    }
    
    public function testGetPrimeFactorsMethod()
    {
        // method exists
        $this->assertTrue( method_exists($this->obj, 'getPrimeFactors'), "Method 'getPrimeFactors' does not exsist.");
        
        // returns an array
        $this->assertTrue( is_array($this->obj->getPrimeFactors()), "Method 'getPrimeFactors' does not return an array as expected.");
        
        // we expect it to take a number parameter
        $refl = new ReflectionMethod($this->obj, 'getPrimeFactors');
        $numParams = $refl->getNumberOfParameters();
        $this->assertEquals(1,$numParams, 'Method "getPrimeFactors" is expected to accept one parameter.');
    }
    
    /**
     * @dataProvider provider
     */
    public function testIsPrime($num, $primes)
    {
        foreach( $primes as $prime )
        {
            $this->assertTrue( $this->obj->isPrime($prime), "Method 'isPrime' is not correctly validating prime numbers." );
        }
        
    }
    
    /**
     * @dataProvider provider
     */
    public function testGetPrimeFactors($num, $primes)
    {
        $this->assertTrue( ($this->obj->getPrimeFactors($num) === $primes), "Method 'getPrimeFactors' is not returning the correct array of prime factors." );
    }
    
    /**
     * @dataProvider provider
     */
    public function testGetLrgestPrim($num, $primes)
    {
       // we are expecting it to return an interger
        $this->assertTrue( is_int( $this->obj->getLrgestPrim($primes)), 'Method "getLrgestPrim" is expected to return an integer.' );
        
        // expect the sum of even numbers to be ?
        $this->assertEquals(29, $this->obj->getLrgestPrim($primes), '"getLrgestPrim" does not return the correct result.');
    }
    
   
    public function provider()
    {
        return array(
            array( 13195, array(5,7,13,29) )
        );
    }
    
}
?>