<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>

      <h1>Tambah Mahasiswa</h1>
      <a href="<?= base_url('mahasiswa')?>">Kembali</a>
      <hr>
      <from>
      	<h6>Nim</h6>
      	<input type="number" name="nim"> <br>

      	<h6>Nama Mahasiswa</h6>
      	<input type="text" name="nama_lengkap"><br><br>

      	<input type="submit" name="submit" value="simpan">
      </from>
      
</body>
</html>