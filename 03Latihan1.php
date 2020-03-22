<?php
	$ball = 'yellow';
	$redbox = '';
	$yellowbox = '';
	$bluebox = '';
	$greenbox = '';
	$purplebox = '';
	$colorlessbox = '';
	 //Coba ubah ke "yellow", "blue", "green", "purple", atau warna lain
	if ($ball == 'red') {
		$redbox = $ball;
	} else if ($ball == 'yellow') {
		$yellowbox = $ball;
	} else if ($ball == 'blue') {
		$bluebox = $ball;
	} else if ($ball == 'green') {
		$greenbox = $ball;
	} else if ($ball == 'purple') {
		$purplebox = $ball;
	} else {
		$colorlessbox = $ball;
	}
	echo "red box : $redbox <br>\n";
	echo "yellow box : $yellowbox <br>\n";
	echo "blue box : $bluebox <br>\n";
	echo "green box : $greenbox <br>\n";
	echo "purple box : $purplebox <br>\n";
	echo "colorless box : $colorlessbox <br>\n";
?>