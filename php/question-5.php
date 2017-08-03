<?php 
/*
Question 5
____________________
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/

function findSmallest(){

	for ($i=2521; $i++;) {
		$amount = 0;
		for ($m=11; $m <= 20 ; $m++) { 
			if ($i % $m  == 0 ) {
				$amount++;
			}
		}
		if ($amount == 10) {
			return $i;
		}
	}

}

echo findSmallest();