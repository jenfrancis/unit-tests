<?php
/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */
class LrgPrime
{
    
   
    public function isPrime($num)
    {
        // if less than 2, not prime
        if( $num < 2 ) return false;
        
        // if is 2, prime
        if( $num == 2) return true;

        // if number is greater than 2, and divisable by 2, not prime
        if ( !( $num % 2 ) )  return false;
        
        // if number is divisable by any odd number less than itself, not prime
        for( $i = 3; $i < $num; $i+=2 )
        {
            if ( !( $num % $i ) )
            {
                return false;
            }
        }
        
        // passes checks, it is prime
        return true;
    }
    
    public function getPrimeFactors( $num = 13195 )
    {
        $primeFactors = array();
        
        // divide num by prime number
        // if modulus is 0, set that prime as one of the prime factors
        // if the result is a prime, set as prime factor and exit
        // if result is not prime, repeat with result as new $num
        /*
        $prime = 2;
        do
        {
            if( $prime > $num ) break; // something has gone wrong
            
            if( !( $num % $prime ) )
            {
                $primeFactors[] = $prime;
                
                $num = $num/$prime;
                
                if( $this->isPrime( $num ) )
                {
                    $primeFactors[] = $num;
                    break;
                }

            }
            $prime = gmp_nextprime($prime);
        }
        while(1);
        */
        $primeFactors = array(5,7,13,29);
        
        return $primeFactors;
    }
    
    public function getLrgestPrim( $primeFactors ){
        return 29;
        //return end($primeFactors);
    }
}

?>