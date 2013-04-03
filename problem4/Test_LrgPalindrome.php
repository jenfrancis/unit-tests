<?php
/**
 * A palindromic number reads the same both ways.
 * The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

require("LrgPalindrome.php");

class Test_LrgPalindrome extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->obj = new LrgPalindrome();
    }
    
    public function testGeneratePalidromesMethod()
    {
        // method exists
        $this->assertTrue( method_exists($this->obj, 'generatePalindromes'), "Method 'generatePalindromes' does not exsist.");
        
        // returns an integer
        $this->assertTrue( is_array($this->obj->generatePalindromes(10,99)), "Method 'generatePalindromes' does not return an array as expected.");
        
        // we expect it to take a two parameter
        $refl = new ReflectionMethod($this->obj, 'generatePalindromes');
        $numParams = $refl->getNumberOfParameters();
        $this->assertEquals(2,$numParams, 'Method "generatePalindromes" is expected to accept two parameter.');
    }
    
    
    
}
?>