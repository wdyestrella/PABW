<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Volume Balok</title>
</head>
<body>
	<form method="GET">
		<h2>Menghitung Volume Balok</h2>
		<br>
		Panjang : <input type="number" placeholder="" name="panjang" id="panjang">
		<br><br>
		Lebar &nbsp &nbsp : <input type="number" placeholder="" name="lebar" id="lebar">
		<br><br>
		Tinggi &nbsp : <input type="number" placeholder="" name="tinggi" id="tinggi">
		<br><br>
		<input type="submit" value="Hitung">
		<br><br>
	</form>
	Volume : 

	<?php
		$panjang = $_GET['panjang'];
		$lebar = $_GET['lebar'];
		$tinggi = $_GET['tinggi'];

		$volume = $panjang*$lebar*$tinggi;
		echo $volume;
	?>
	
</body>
</html>