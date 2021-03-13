<?php
// Ini adalah komentar dalam satu baris
/* Kalau yang ini, komentar
dalam banyak baris, yang baru
akan selesai setelah diakhiri
dengan */
?>
<html>
<head>
	<title>Test Penyisipan PHP Pada HTML</title>
</head>
<body>
Kapal Asing, Silakan identifikasikan diri Anda! <br>
<?php
// Berikut ini adalah inisiasi beberapa variabel
$nama1 = "Deia";
$nama2 = "Iqbal";
$nama3 = "Afzani";
$nilai1=25;
$nilai2=25;
$hasil=$nilai1*$nilai2;
$a=2;
$b=3;
$hsl=pow($a,$b);
?>
<b>Ini adalah kapal Tentara US Army.<br>
<?php
echo "Saya $nama1, $nama2 $nama3, sebagai kapten kapal.</b><br>";
echo "$nilai1 x $nilai2 = $hasil<br>";
echo "$a ^ $b = $hsl";
?>
</body>
</html> 