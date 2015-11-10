<body>
  <div class="container">
	<center>
	<div class="panel panel-default">
		  <div class="panel-heading"><center>Tambah Data Kelas Siswa SMP</center></div>
		  <div class="panel-body">
		  <div class="row">
			<div class="col-lg-12">
				<form method="post">
				<table class="table table-striped table-hover table-bordered">
					<tr class="default  input-sm">
						<td>Nomor Induk Siswa</td>
						<td>
						<select class="form-control input-sm" name="id_kelamin" id="select">
						<option value="">--Silahkan Pilih NIS--</option>
						<?php
							// Mengatur Opsi yang muncul di pilihan agenda
							$sql="SELECT * FROM tb_siswa";
							$ssql=$conn->query($sql);
							foreach ($ssql as $row){
								echo'<option value="'.$row['nis'].'">'.$row['nis'].'</option>';
							}
						?>
						</select>
						</td>
					</tr>
					<tr class="default  input-sm">
						<td>Nama Kelas</td>
						<td>
						<select class="form-control input-sm" name="id_kelamin" id="select">
						<option value="">--Silahkan Pilih Kelas--</option>
						<?php
							// Mengatur Opsi yang muncul di pilihan agenda
							$sql="SELECT * FROM tb_kelas";
							$ssql=$conn->query($sql);
							foreach ($ssql as $row){
								echo'<option value="'.$row['id_kelas'].'">'.$row['nama_kelas'].'</option>';
							}
						?>
						</select>
						</td>
					</tr>
					<tr class="default">
						<td>&nbsp;</td>
						<td><button type="submit" name="tambahdata" class="btn btn-primary">Tambah Data Kelas Siswa</button> &nbsp; <a href="index.php?page=data-kelas-siswa" class="btn btn-danger" name="cancel">Cancel</a></td>
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