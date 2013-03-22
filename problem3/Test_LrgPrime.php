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
    
    public function testGetPrimeFactors(){
        $this->assertTrue( method_exists($this->obj, 'getPrimeFactors'), "Method 'getPrimeFactors' does not exsist.");
    }
    
}
?>