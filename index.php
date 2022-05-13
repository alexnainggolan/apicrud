<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR TAMU</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<h1 align="center">WEB SISTEM INFORMASI BUKU</h1>
		<div class="card">
			<div class="card-header bg-info text-white ">
			TABEL BAGIAN
			</div>			
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Bagian</th>
							<th>Nama Bagian</th>
							<th>Keterangan</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); 
							$datas = mysqli_query($koneksi, "select * from tbl_bagian") or die(mysqli_error($koneksi));

							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['KodeBagian']; ?></td>
						<td><?= $row['NamaBagian']; ?></td>
						<td><?= $row['Keterangan']; ?></td>
						<td>								
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
			<div class="card-header bg-info text-white ">
			TABEL SUB BAGIAN 
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Bagian</th>
							<th>Kode Sub Bagian</th>
							<th>Jabatan</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); 
							$datas = mysqli_query($koneksi, "select * from tbl_subag") or die(mysqli_error($koneksi));
							

							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['KodeBagian']; ?></td>
						<td><?= $row['KdSubBag']; ?></td>
						<td><?= $row['Jabatan']; ?></td>
						<td><?= $row['Keterangan']; ?></td>
						
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
			<div class="card-header bg-info text-white ">
			TABEL TIKET ANTREAN
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nomor Tiket</th>
							<th>Tanggal Pembuatan</th>
							<th>Status Tiket</th>
							<th>Status Cetak</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "select * from tbl_tiketantre") or die(mysqli_error($koneksi));

							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['Notiket']; ?></td>
						<td><?= $row['TglBuatTiket']; ?></td>
						<td><?= $row['StatusTiket']; ?></td>
						<td><?= $row['StatusCetak']; ?></td>
						
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
			<div class="card-header bg-info text-white ">
			TABEL TIKET TAMU
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nomor Tiket</th>
							<th>Nomor Identitas</th>
							<th>Nama</th>
							<th>Kode Bagian Sub Seksi</th>
							<th>Kode Sub Bagian Seksi</th>
							<th>Jabatan</th>
							<th>Keperluan Bertamu</th>
							<th>Tanggal Minta Bertamu</th>
							<th>Minta Jam Bertamu</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); 
							$datas = mysqli_query($koneksi, "select * from tbl_tikettamu") or die(mysqli_error($koneksi));

							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['Notiket']; ?></td>
						<td><?= $row['NoIdentitas']; ?></td>
						<td><?= $row['Nama']; ?></td>
						<td><?= $row['KdBagSubSeksi']; ?></td>
						<td><?= $row['KdSubBagSeksi']; ?></td>						
						<td><?= $row['Jabatan']; ?></td>
						<td><?= $row['KeperluanBertamu']; ?></td>
						<td><?= $row['TglMintaBertamu']; ?></td>
						<td><?= $row['MintaJamBertamu']; ?></td>
						
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
			<div class="card-header bg-info text-white ">
			TABEL IDENTITAS BERTAMU
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nomor Identitas</th>
							<th>Nama</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Nomor Handphone</th>
							<th>Telepon Rumah</th>
							<th>Email</th>
							<th>Kode Provinsi</th>
							<th>Kode Kabupaten</th>
							<th>Kode Kecamatan</th>
							<th>Kode Kelurahan</th>
							<th>Kode Pos</th>
							<th>Kode Jenis ID</th>
							<th>Photo Diri KTP</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "select * from tbl_identitas") or die(mysqli_error($koneksi));
							
							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['NoIdentitas']; ?></td>
						<td><?= $row['Nama']; ?></td>
						<td><?= $row['TempatLahir']; ?></td>
						<td><?= $row['TglLahir']; ?></td>
						<td><?= $row['JenisKelamin']; ?></td>		
						<td><?= $row['Alamat']; ?></td>
						<td><?= $row['No.Handphone']; ?></td>
						<td><?= $row['Tlp.rmh']; ?></td>
						<td><?= $row['Email']; ?></td>
						<td><?= $row['KdPropinsi']; ?></td>
						<td><?= $row['KdKotaKabupaten']; ?></td>
						<td><?= $row['KdKecamatan']; ?></td>
						<td><?= $row['KdKelurahan']; ?></td>
						<td><?= $row['Kodepos']; ?></td>
						<td><?= $row['KdJenisId']; ?></td>
						<td><?= $row['PhotoDiriktp']; ?></td>
						
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
			<div class="card-header bg-info text-white ">
			TAMPIL DUA TABEL  
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Bagian</th>
							<th>Kode Sub Bagian</th>
							<th>Jabatan</th>
							<th>Nama Bagian</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); 
							$datas = mysqli_query($koneksi, "select * from tbl_bagian LEFT JOIN tbl_subag ON tbl_bagian.KodeBagian = tbl_subag.KodeBagian") or die(mysqli_error($koneksi));
							
							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['KodeBagian']; ?></td>
						<td><?= $row['KdSubBag']; ?></td>
						<td><?= $row['Jabatan']; ?></td>
						<td><?=$row['NamaBagian'];?></td>
						<td><?= $row['Keterangan']; ?></td>
						
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
			<div class="card-header bg-info text-white ">
			TAMPIL TIGA TABEL  
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Bagian</th>
							<th>Kode Sub Bagian</th>
							<th>Jabatan</th>
							<th>Nama Bagian</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); 
							$datas = mysqli_query($koneksi, "select * from tbl_tikettamu INNER JOIN tbl_tiketantre ON tbl_tikettamu.Notiket = tbl_tiketantre.Notiket INNER JOIN tbl_identitas ON tbl_tikettamu.NoIdentitas = tbl_identitas.NoIdentitas") or die(mysqli_error($koneksi));
							$no = 1;

							
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['TglBuatTiket']; ?></td>
						<td><?= $row['StatusTiket']; ?></td>
						<td><?= $row['Nama']; ?></td>
						<td><?=$row['Jabatan'];?></td>
						<td><?= $row['TempatLahir']; ?></td>
						
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>