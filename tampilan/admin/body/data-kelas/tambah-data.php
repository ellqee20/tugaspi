<body>
  <div class="container">
	<center>
	<div class="panel panel-default">
		  <div class="panel-heading"><center>Tambah Kelas Baru</center></div>
		  <div class="panel-body">
		  <div class="row">
			<div class="col-lg-12">
				<form method="post">
				<table class="table table-striped table-hover table-bordered">
					<tr class="default input-sm">
						<td >Nama Kelas</td>
						<td><input type="text" class="form-control input-sm" name="nama_kelas" placeholder="Masukkan Nama Kelas, Contoh : XII-A" required /></td>
					</tr>
					<tr class="default">
						<td>&nbsp;</td>
						<td><button type="submit" name="tambahdata" class="btn btn-primary">Tambah Kelas Baru</button> &nbsp; <a href="index.php?page=data-kelas" class="btn btn-danger" name="cancel">Cancel</a></td>
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