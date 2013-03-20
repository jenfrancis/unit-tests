<?php
/*
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
**/

class evenFibonaciNumSum
{
    
    public $limit;
    
    function generateFibonacciSeq( $limit )
    {
        if( empty($limit) ) $limit = 4000000;
        $seq = array();

        do{
            
            $a = ( count($seq) ) ? end($seq) : 0;
            
            $b = ( count($seq) > 1 ) ? prev($seq) : 1;
            
            $c = ($a + $b);
               
            // check it
            if( $c > $limit )
                break;
            
            $seq[] = $c;
            
        } while (1);

        return $seq;
        
    }
    
    function evenFibonacciNumSum( $limit = 4000000 )
    {

        $seq = $this->generateFibonacciSeq($limit);

        $even_seq = array();
        
        foreach($seq as $num)
        {
            if( !($num%2) ) $even_seq[] = $num;
        }
        return array_sum($even_seq);
    }
    
}
/*
$test = new evenFibonaciNumSum();
$result = $test->evenFibonacciNumSum();
echo $result;
*/
?>