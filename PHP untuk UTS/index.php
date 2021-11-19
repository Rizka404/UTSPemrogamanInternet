<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Penjumlahan Sederhana untuk Tugas UTS, oleh Rizka Muhamad Pradana</title>
</head>
<body>
<form method="post">
<table>
<label>Masukan Angka 1</br>
<input type="number" name="a"></br>
<label>Masukan Angka 2</br>
<input type="number" name="b"></br>
<?php
$hasil = "";
if(isset($_POST['jumlahkan'])){
$hasil = $_POST['a'] + $_POST['b']; }
?>
<input type="submit" name="jumlahkan" value="Jumlahkan"></br>
<input type="text" name="hasil" disabled value=
"<?php
	echo $hasil;
		?>" >
</table>
</form>
</body>
</html>