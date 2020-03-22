<html>
<head>
	<title>Variable Static</title>
</head>
<body>
	<h1>Variable Static</h1>
	<?php
		Function Test() {
			Static $a=0;
			echo "Nilai a : ";
			echo $a;
			echo "<br>";
			$a++;
		}
		Test();
		Test();
		Test();
		Test();
		Test();
	?>
</body>
</html>