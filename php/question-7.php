<?php 
/*
Question 7
____________________
10001st prime

By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?
*/

function findBigPrime(){
	$no = 0;
	for ($i=1; $i++;) { 

		for ($m=$i-1; $m >= 1 ; $m--) {

			if ($m > 1) {
				if ($i % $m == 0) {
					break;
				}
			}
			elseif ($m == 1){
				$no++;
			}
		}

		if ($no == 10001) {
			return $i;
		}
	}

}

echo findBigPrime();