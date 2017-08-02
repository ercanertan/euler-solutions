<?php 
/*
Question 3
____________________
The prime factors of 13195 are 5, 7, 13 and 29.
What is the largest prime factor of the number 600851475143 ?

*/

ini_set('memory_limit', '-1');

function getLargest($max){
	$new = $max;
	$largest = 0;
	for ($i=2; $i < $max ; $i++) { 
			ob_start();
			if( is_int($new / $i)){
				echo $i . '-';
				$new = $new / $i;
				$largest = $i;
			echo ob_get_contents();
			ob_end_flush();	
		}
	}	
	return $largest;
}
echo getLargest(600851475143);