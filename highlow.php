<?php

if($argc == 3) {
	if(is_numeric($argv[1])  && is_numeric($argv[2])) {
		if($argv[1] < $argv[2]) {
			$min = $argv[1];
			$max = $argv[2];
		}
		else {
			$min = $argv[2];
			$max = $argv[1];	
		}


$number = rand($min, $max);


			// Opening question goes here
			fwrite(STDOUT, "Let's play Number Guessing Game! yes or no\n");

			$answer = strtolower(trim(fgets(STDIN)));


			if($answer == "yes") {
				fwrite(STDOUT, "Pick a number between $min and $max.\n");
			}
			else {
				fwrite(STDOUT, "BOR-ING\n");
			}
			// Set up variables here
			// $number = mt_rand(1, 100);

			}
			$guesses = 1;

			// Game code goes here
			do {

			$input = fgets(STDIN);

			if($number > $input) {
				fwrite(STDOUT, "Higher \n");
			}

			elseif($number < $input) {
				fwrite(STDOUT, "Lower \n");

			}
			elseif($number == $input) {
				fwrite(STDOUT, "You got it!\n");
				fwrite(STDOUT, "And in $guesses guesses!\n");
			}
			$guesses++;

		}
			// while goes here or game will not run
			while ($input != $number);
		
	}
	else  {
		fwrite(STDOUT, "You must use integers!\n");
}
// 	else {
// 		fwrite(STDOUT, "You must put three arguments!\n");

// }



?>