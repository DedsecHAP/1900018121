<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nama = $_POST['innama'];
		$nim = $_POST['innim'];
		$jurusan = $_POST['injurusan'];
		$angkatan = $_POST['inangkatan'];
		$umur = $_POST['inumur'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$kritiksaran = $_POST['inkritiksaran'];

		$file = fopen("kritik&saran.txt","a+");
		fputs ($file, "$nama|$nim|$jurusan|$angkatan|$umur|$jenis_kelamin|$kritiksaran\n");
		fclose($file);
	}

?>
<html>
<head>
	<title>Kritik Dan Saran</title>
	<style>
		body {
			font-family: "segoe ui";
			height: 600px;
			width: 500px;
			margin-left: 30%;
			padding-left: 20px;
			border-radius: 20px;
			box-shadow:0 0 10px 0 black;
		}
		h1 {
			font-size: 25px;
		}
		div {
			margin-bottom: 5px;
		}
		input{
			border: 1px solid #CCCCCC;
			padding: 10px;
			margin-left: 20px;
			font-size: 14px;
		}
		input[type='text']{
			width: 300px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-top: 20px;
			margin-left: 100px;
			cursor: pointer;
			background-color:orange;
			color: black;
			font-weight: bold;
			border-radius: 20px;
			width: 50%;
		}
		label {
			width: 70px;
			display: block;
			float: left;
		}
		body form{
			padding:20 20 20 20;
			position: relative;
		}
	</style>
</head>
<body>
	<form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
	<h1 align="center">Silahkan Isi Form Kritik Dan Saran Teknik Informatika</h1>
		<div style="margin-top:40px;">
			<label>Nama</label><input type="text" name="innama" required="" id="nama">
		</div>
		<div>
			<label>NIM</label><input type="text" name="innim" required="" id="nim" maxlength="10">
		</div>
		<div>
			<label>Jurusan</label><input type="text" required="" id="jurusan" name="injurusan">
		</div>
		<div>
			<label>Angkatan</label><input type="text" required="" id="angkatan" name="inangkatan">
		</div>
		<div>
		<div>
			<label>Umur</label><input type="number" name="inumur" required="" id="umur" maxlength="2">
		</div>
			<label>Jenis Kelamin</label><br><input type="radio" required="" name="jenis_kelamin" value="laki-laki">Laki-Laki<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
		</div>
		<div>
			<label>Kritik Dan Saran</label><input style="height: 100px;" type="text" name="inkritiksaran">
		</div>
		<div style="clear: both;"></div>
		<input type="submit" name="submit" value="Simpan"/>
	</form>
</body>
</html>
