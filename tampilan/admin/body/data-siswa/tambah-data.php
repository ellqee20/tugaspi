<body>
  <div class="container">
	<center>
	<div class="panel panel-default">
		  <div class="panel-heading"><center>Tambah Data Siswa SMP</center></div>
		  <div class="panel-body">
		  <div class="row">
			<div class="col-lg-12">
				<form method="post">
				<table class="table table-striped table-hover table-bordered">
					<tr class="default input-sm">
						<td >Nama</td>
						<td><input type="text" class="form-control input-sm" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required /></td>
					</tr>
					<tr class="default  input-sm">
						<td>Jenis Kelamin</td>
						<td>
						<select class="form-control input-sm" name="id_kelamin" id="select">
						<option value="">--Silahkan Pilih Kelamin--</option>
						<?php
							// Mengatur Opsi yang muncul di pilihan agenda
							$sql="SELECT * FROM tb_kelamin";
							$ssql=$conn->query($sql);
							foreach ($ssql as $row){
								echo'<option value="'.$row['id_kelamin'].'">'.$row['nama_kelamin'].'</option>';
							}
						?>
						</select>
						</td>
					</tr>
					<tr class="default input-sm">
						<td>Tanggal Lahir</td>
						<td><input type="text" id="tanggal" data-date-format="yyyy-mm-dd" class="form-control input-sm" name="tgl_lahir" required /></td>
					</tr>
					<tr class="default input-sm">
						<td>Alamat</td>
						<td><input type="text" class="form-control input-sm" name="alamat" placeholder="Masukkan Alamat Lengkap" required /></td>
					</tr>
					<tr class="default input-sm">
						<td>Nama Orang Tua Wali</td>
						<td><input type="text" class="form-control input-sm" name="ortu_wali" placeholder="Masukkan Nama Orang Tua Wali" required /></td>
					</tr>
					<tr class="default  input-sm">
						<td>Agama</td>
						<td>
						<select class="form-control input-sm" name="id_agama" id="select">
						<option value="">--Silahkan Pilih Agama--</option>
						<?php
							// Mengatur Opsi yang muncul di pilihan agenda
							$sql="SELECT * FROM tb_agama";
							$ssql=$conn->query($sql);
							foreach ($ssql as $row){
								echo'<option value="'.$row['id_agama'].'">'.$row['nama_agama'].'</option>';
							}
						?>
						</select>
						</td>
					</tr>
					<tr class="default  input-sm">
						<td>Golongan Darah</td>
						<td>
						<select class="form-control input-sm" name="id_goldarah" id="select">
						<option value="">--Silahkan Pilih Golongan Darah--</option>
						<?php
							// Mengatur Opsi yang muncul di pilihan agenda
							$sql="SELECT * FROM tb_goldarah";
							$ssql=$conn->query($sql);
							foreach ($ssql as $row){
								echo'<option value="'.$row['id_goldarah'].'">'.$row['nama_goldarah'].'</option>';
							}
						?>
						</select>
						</td>
					</tr>
					<tr class="default">
						<td>&nbsp;</td>
						<td><button type="submit" name="tambahdata" class="btn btn-primary">Tambah Data Siswa</button> &nbsp; <a href="index.php?page=data-siswa" class="btn btn-danger" name="cancel">Cancel</a></td>
					</tr>
				</table>
				</form>
			</div>
			</div>
			</div>	
		</div>
	</center>
	</div>
</body>
<script>
		$('#tanggal').datepicker();
	</script>