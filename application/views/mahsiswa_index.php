<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="<?php echo(base_url ('mahasiswa/tambah')) ?>" class="nav-link">Tambah Data</a>

		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Reza</a>

		</div>

	</nav>

	<div class="alert alert-success text-center mt-2">
		Data mahasiswa
	</div>

	<div class="container">
		<table class="table table-bordered table-sm">
			<thead>
				<tr>

					<th width="10%">No</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				foreach ($tabel as $isi ){
					?>

					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $isi->nim;?></td>
						<td><?php echo $isi->nama;?></td>
						<td><?php echo $isi->alamat;?></td>
						<td>
							<a href="" class="btn-info btn-sm btn-primary">Edit</a>
							<a href="" class="btn-info btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
	

</body>
</html>