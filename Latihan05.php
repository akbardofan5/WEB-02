<?php
	//Komentar 1 Baris
	/*Komentar Lebih Dari 1
	Baris */
?>
<html>
<head>
	<title>Test Penyimpanan PHP Pada HTML</title>
</head>
<body>
	Kapal Asing, Silahkan Identifikasi Diri Anda!<br>
	<?php
		$namad = "Jean";
		$namat = "Luc";
		$namab = "Piccard";
		$nilai1 = 25;
		$nilai2 = 50;
		$hasil = $nilai1*nilai2;
		$a = 2;
		$b = 3;
		$hsl = pow($a,$b);
	?>
	<b>Ini adalah Kapal Federasi Planet USS Enterprise.<br>
	<?php
		echo "Saya $namab, $namad $namat $namab, Kapten Kapal.</b><br>";
		echo "$nilai x $nilai2 = $hasil<br>";
		echo "$a^$b = $hsl";
	?>
</body>
</html>