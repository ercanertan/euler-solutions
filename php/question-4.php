<?php 
/*
Question 4 Largest palindrome product
____________________
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.Find the largest palindrome made from the product of two 3-digit numbers.

*/

function getLPP(){
	$finalNumber;

	for ($i=100; $i < 1000 ; $i++) { 

		for ($j=100; $j < 1000 ; $j++) { 

			$numberText = (string)($i * $j);
			$numberLen  = strlen($numberText);
			$reversedNumber;

			for ($m=0; $m < floor($numberLen/2) ; $m++) { 

				$a = $numberText[$m];
				$b = $numberText[$numberLen - $m - 1];

				$a = $a ^ $b;
				$b = $b ^ $a;
				$a = $a ^ $b;

				$reversedNumber[$m] = $a;
				$reversedNumber[$numberLen - $m - 1] = $b;
			}

			if (!empty($reversedNumber)) {
				$reversedNumberText = implode("", $reversedNumber);
				if ($numberText === $reversedNumberText ) {
					$finalNumber[] = $reversedNumberText;
				}
			}	
		}
	}
	return $finalNumber;
}

echo max(getLPP());
