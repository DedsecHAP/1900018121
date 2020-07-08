<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Menangkap Data Dengan GET</title>
  <style type="text/css">
    body{
      position: relative;
      top: 20px;
    }
    .container{
      width:77%;
      padding:40px;
      margin-left:80px;
      box-shadow:0 0 5px 0 black;
      border-radius:20px;

    }
    table tbody tr{
      text-align: center;
    }
    table{
      border-collapse:collapse;
    }
    table,tr,td{
      border:1px solid black;
    }
  </style>
</head>

<body>
	<div class="container">
    <h1 style="margin-left:100px;">Daftar Kritik Dan Saran Mahasiswa Teknik Informatika</h1>
		<table width="1024">
      <tbody>
        <tr style="font-weight:bold; background-color:green; color:white;">
          <td width="35" height="40">No</td>
          <td width="120" style="text-align: center">Nim</td>
          <td width="200" style="text-align: center">Nama</td>
          <td width="150" style="text-align: center">Jurusan</td>
          <td width="80" style="text-align: center">Angkatan</td>
          <td width="54" style="text-align: center">Umur</td>
          <td width="125" style="text-align: center">Jenis Kelamin</td>
          <td width="185" style="text-align: center">Kritik Dan Saran</td>
        </tr>
        <?php $file = fopen("kritik&saran.txt","r"); $i=1;?>
        <?php while ($isi = fgets($file,1000)): $data = explode("|",$isi);?>
          <tr>
            <td><p><?= $i ?></p></td>
            <td><p><?= $data[1] ?></p></td>
            <td><p><?= $data[0] ?></p></td>
            <td><p><?= $data[2] ?></p></td>
            <td><p><?= $data[3] ?></p></td>
            <td><p><?= $data[4] ?></p></td>
            <td><p><?= $data[5] ?></p></td>
            <td><p><?= $data[6] ?></p></td>
          </tr>
        <?php $i++; endwhile;  ?>
      </tbody>
    </table>
  </div>

</body>
</html>
