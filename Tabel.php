<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Menangkap Data Dengan GET</title>
  <style type="text/css">
    body{
      position: relative;
      top: 20px;
      left: 40px;
    }
    table tbody tr{
      text-align: center;
    }
  </style>
</head>

<body>
	<div>
		<table width="1024" height="232" border="1">
      <tbody>
        <tr>
          <td width="215" style="text-align: center">Nama</td>
          <td width="134" style="text-align: center">NIM</td>
          <td width="154" style="text-align: center">Jurusan</td>
          <td width="51" style="text-align: center">Angkatan</td>
          <td width="54" style="text-align: center">Umur</td>
          <td width="125" style="text-align: center">Jenis Kelamin</td>
          <td width="185" style="text-align: center">Alamat</td>
        </tr>
        <?php if(isset($_GET["submit"])): ?>
          <?php if (empty($_GET["innama"]) || empty($_GET["innim"])): ?>
              <script type="text/javascript">
                 var cek = window.confirm("Ada Kolom yang Kosong, Silahkan Kembali Ke Form")
                 if (cek == true) {
                    window.location.href = "Form.html";
                 }
              </script>
            <?php else: ?>
              <tr>
                <td><h3><?= $_GET["innama"]; ?></h3></td>
                <td><h3><?= $_GET["innim"]; ?></h3></td>
                <td><h3><?= $_GET["injurusan"]; ?></h3></td>
                <td><h3><?= $_GET["inangkatan"]; ?></h3></td>
                <td><h3><?= $_GET["inumur"]; ?></h3></td>
                <td><h3><?= $_GET["jenis_kelamin"]; ?></h3></td>
                <td><h3><?= $_GET["inalamat"]; ?></h3></td>
              </tr>
          <?php endif ?>
      <?php endif; ?>
      </tbody>
    </table>
  </div>

</body>
</html>
