<?php
	include "conn.php";
	$articleID = $_GET['articleID'];
	$perintah="DELETE FROM articles WHERE articleID =\"$articleID\"";
	$hasil= mysqli_query ($conn,$perintah);
	if ($hasil) { 
		echo "Artikel berhasil dihapus<br>";
		echo "<a href=\"articles.php\">Back</a>";
	} else {
		echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
		ke database MySQL.";
	}
?>