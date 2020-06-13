<?php
	include "conn.php";
	$ID= $_POST['ID'];
	$judul= $_POST['title'];
	$penulis = $_POST['author'];
	$lead = $_POST['abstraksi'];
	$content = $_POST['content'];
	$time=date("d M Y, H:i");
	$lead = str_replace("\r\n","<br>",$lead);
	$content = str_replace("\r\n","<br>",$content);
	$update="UPDATE articles SET judul='$judul', penulis='$penulis',
	lead='$lead',
	content='$content', waktu='$time' WHERE articleID ='$ID'";
	$hasil=mysqli_query($conn,$update);
	if ($hasil) {
		echo "Artikel berhasil di update<br>";
		echo "<a href=\"articles.php\">List</a>";
	} else {
		echo "Artikel gagal di update";
	}
?>