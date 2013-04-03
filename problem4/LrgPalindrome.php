<?php
/**
 * A palindromic number reads the same both ways.
 * The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */
class LrgPalindrome
{
    function isPalindrome($num)
    {
        // count number of digits
        // split in half, reverse second half,
        // do they match?
        
        $len = strlen($num);
        $split = ceil($len/2);
        
        $halves = str_split($num, $split);
        
        // if there was an odd number, trim off first halve to complare
        if( strlen($halves[0]) > strlen($halves[1]) ) $halves[0] = substr($halves[0],0,-1); 
        
        if( $halves[0] == strrev($halves[1]) ) return true;
        else return false;
    }
    
    function generatePalindromes($start, $end)
    {
        return array();
    }

}

?>