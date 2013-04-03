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
        // loop through all numbers in the range
        // multiple it will all numbers greater than it
        
        $palidromes = array();
        
        for( $i = $start; $i <= $end; $i++ )
        {
            for( $j = $i; $j <= $end; $j++ )
            {
                if( $this->isPalindrome($i * $j) )
                {
                    $palidromes[] = ($i * $j);
                }
            }
        }
        return $palidromes;
    }
    
    function lrgestPalindrome($palidromes)
    {
        $result = 0;
        foreach( $palidromes as $num ){
            if( $num > $result ) $result = $num;
        }
        return $result;
    }

}
/*
$t = new LrgPalindrome();
$result = $t->generatePalindromes(100,999);
echo $t->lrgestPalindrome($result);
*/
?>