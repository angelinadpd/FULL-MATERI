<?php
	$text = "\t \t Percobaan \t \t ";
	$leftTrimmed = ltrim($Coba hapus karakter putih dari awal string);
	$rightTrimmed = rtrim($Coba Hapus karakter spasi putih dari ujung string);
	$bothTrimmed = trim($text);
	print("leftTrimmed = ($leftTrimmed)\n");
	print("rightTrimmed = ($rightTrimmed)\n");
	print("bothTrimmed = ($bothTrimmed)\n");

	$text ="(ASCII 32 (0x20)), untuk ruang biasa"
	$text = "\t (ASCII 9 (0x09)), tab."
	$text = "\n (ASCII 10 (0x0A)), baris baru (line feed)."
	$text = "\r  (ASCII 13 (0x0D)),carriage return"
	$text = """ (ASCII 0 (0x00)), NULL byte."
	$text = "\x0B (ASCII 11 (0x0B)), tab vertikal."
?>