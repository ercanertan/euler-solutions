<?php 

/*
Question 1 
______________________
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000.
*/

// Solution One
function sOne($max, $num1, $num2){
	$total = 0;
	for ($i=1; $i < $max ; $i++) { 
		if ( ($i % $num1 == 0) || ($i % $num2 == 0) ) {
			$total += $i;
		}
	}
	return $total;
	
}
echo sOne(1000,3,5);


// Solution Two
function sTwo($max, $num1, $num2){

	$finalNum1 = 0;
	$finalNum2 = 0;

	$indexNum1 = floor( ($max-1) / $num1);
	for ($i=1; $i <= $indexNum1; $i++) { 
		if ( ($i * $num1)% ($num1*$num2) != 0 ) {
			$finalNum1 += $i * $num1;
		}
	}

	$indexNum2 = floor( ($max-1) / $num2);
	for ($i=1; $i <= $indexNum2; $i++) { 
			$finalNum2 += $i * $num2;
	}

	return $finalNum1 + $finalNum2 ;
}
echo sTwo(1000,5,3);


