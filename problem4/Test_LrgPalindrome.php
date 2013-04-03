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
        
        // we expect it to take a two parameters
        $refl = new ReflectionMethod($this->obj, 'generatePalindromes');
        $numParams = $refl->getNumberOfParameters();
        $this->assertEquals(2,$numParams, 'Method "generatePalindromes" is expected to accept two parameter.');
    }
    
    /**
     * @dataProvider provider
     */
    public function testIsPalindrome($result)
    {
        // method exists
        $this->assertTrue( method_exists($this->obj, 'isPalindrome'), "Method 'isPalindrome' does not exsist.");
        
        // we expect it to take a one parameter
        $refl = new ReflectionMethod($this->obj, 'isPalindrome');
        $numParams = $refl->getNumberOfParameters();
        $this->assertEquals(1,$numParams, 'Method "isPalindrome" is expected to accept one parameter.');
        
        //validates palidronic number
        $this->assertTrue( $this->obj->isPalindrome($result), "Method 'isPalindrome' is not correctly validating palindromic numbers." );
    }
    
    /**
     * @dataProvider provider
     */
    public function testLrgPalidrome($result, $range)
    {
        // method exists
        $this->assertTrue( method_exists($this->obj, 'lrgestPalindrome'), "Method 'lrgestPalindrome' does not exsist.");
        
        // we expect it to take a one parameter
        $refl = new ReflectionMethod($this->obj, 'lrgestPalindrome');
        $numParams = $refl->getNumberOfParameters();
        $this->assertEquals(1,$numParams, 'Method "lrgestPalindrome" is expected to accept one parameter.');
        
        // validate is returns the expected result
        $palidromes = $this->obj->generatePalindromes($range[0],$range[1]);        
        $this->assertEquals($result, $this->obj->lrgestPalindrome($palidromes), '"lrgestPalindrome" does not return the correct result.');
    }
    
    public function provider()
    {
        return array(
            array( 9009, array(10,99) ),
            array( 906609, array(100,999) ),
        );
    }
    
}
?>