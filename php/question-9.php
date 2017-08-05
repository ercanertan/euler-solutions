<?php 
/*
Question 9
Special Pythagorean triplet
A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a2 + b2 = c2
For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.
*/

function findPTriplet(){
	$pTriplets;

	for ($c=4;  $c++;) { 
		
		for ($b=$c-1; $b > 2 ; $b--) { 

			for ($a=$b-1; $a > 1; $a--) { 
				if ( ($c * $c) == (($a * $a) + ($b * $b) ) ){

					if ($a+$b+$c == 1000) {
						$pTriplets[]=['a'=>$a,'b'=>$b,'c'=>$c];
						return $a*$b*$c;
						// return $pTriplets;
					}
					
				}
			}
		}
	}
}
echo findPTriplet();

// 200
// 375
// 425
