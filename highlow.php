<?php

fwrite(STDOUT, "Let's play Number Guessing Game! yes or no\n");

$answer = strtolower(trim(fgets(STDIN)));


if($answer == "yes") {
	fwrite(STDOUT, "Pick a number between 1 and 100.\n");
}
else {
	fwrite(STDOUT, "BOR-ING\n");
}

$number = mt_rand(1, 100);
$guesses = 0;


do {
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
while ($input != $number)

?>