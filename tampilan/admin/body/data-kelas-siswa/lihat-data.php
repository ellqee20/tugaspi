<body>
  <div class="container">
	  <center><legend>Manage Data Kelas Siswa</legend></center>
	  <a href="index.php?page=tambah-data-kelas-siswa" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> &nbsp Tambah Data Kelas Siswa</a>
	  <br></br>
	  <br></br>
		<div class="row">
		  <div class="col-md-5">
			<form method="post" class="form-horizontal">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-4 control-label input-sm">Cari NIS Siswa &nbsp &nbsp &nbsp &nbsp :</label>
			  <div class="col-lg-6">
				<select class="form-control input-sm" name="nis" id="nis">
					<option value=""></option>
					<?php
						// Mengatur Opsi yang muncul di pilihan agenda
						$sql="SELECT * FROM tb_siswa";
						$ssql=$conn->query($sql);
						foreach ($ssql as $row){
							echo'<option value="'.$row['nis'].'">'.$row['nis'].'</option>';
						}
					?>
				</select>
			  </div>
			  <div class="col-lg-2">
			  <button type="submit" name="caridata" class="btn btn-warning btn-sm">Tampilkan Data</button>
			  </div>
			 </div>
			 </form>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-5">
			<form method="post" class="form-horizontal">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-4 control-label input-sm">Filter Kelas &nbsp &nbsp &nbsp &nbsp :</label>
			  <div class="col-lg-6">
				<select class="form-control input-sm" name="kelas" id="kelas">
					<option value=""></option>
					<?php
						// Mengatur Opsi yang muncul di pilihan agenda
						$sql="SELECT * FROM tb_kelas";
						$ssql=$conn->query($sql);
						foreach ($ssql as $row){
							echo'<option value="'.$row['nama_kelas'].'">'.$row['nama_kelas'].'</option>';
						}
					?>
				</select>
			  </div>
			  <div class="col-lg-2">
			  <button type="submit" name="caridata" class="btn btn-warning btn-sm">Tampilkan Data</button>
			  </div>
			 </div>
			 </form>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-5">
			<form method="post" class="form-horizontal">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-4 control-label input-sm">Semua Data &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
			  <div class="col-lg-6">
				<button type="submit" name="tampilsemuadata" class="btn btn-warning btn-sm">Tampilkan Data</button>
			  </div>
			 </div>
			 </form>
			  </div>
		</div>
		<br>
		<div class="container table-responsive">
		<table class="table table-striped table-hover table-bordered table-responsive">
		 <tr class="danger">
			<td> <center><font color='black' size='2.5'><b>No</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Nama Siswa</b></font></td>
			<td> <center><font color='black' size='2.5'><b>NIS</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Kelas</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Edit</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Delete</b></font></td>
		</tr>
		<?php
		
		if (isset($_POST['tampilsemuadata'])){
			$ssql = $conn -> query("SELECT * FROM tb_siswa");
		}
		elseif (isset($_POST['caridata'])){
			$noregistrasi = $_POST['noregistrasi'];
			$ssql = $conn -> query("SELECT * FROM tb_siswa WHERE nama_lengkap LIKE '%".$nama."%'");
		}
		else {
			$ssql = $conn -> query("SELECT * FROM tb_siswa s inner join tb_kelassiswa ks inner join tb_kelas k on s.id_siswa=ks.id_siswa AND ks.id_kelas=k.id_kelas ");
		}
			$nomor = 1;
			foreach($ssql as $row)
			{
				$id = $row['id_siswa'];	
				echo "<tr class='info' align='center'>";
				echo"<td><font color='black' size='2.5'>" .$nomor."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['nama_lengkap']."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['nis']."</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['nama_kelas']. "</font></td>";
				echo"<td> <a onclick='editdata($id)' class='btn btn-primary btn-xs'><center><span class='glyphicon glyphicon-refresh'></span> &nbsp Edit</center></a>";
				echo"<td> <a onclick='hapusdata($id)' class='btn btn-danger btn-xs'><center><span class='glyphicon glyphicon-remove'></span> &nbsp Delete</center></a>";		
				echo "</tr>";
				$nomor++;
			}
		
		?>
		</table>
		</div>
	</center>
  </div>
  <script>
  function hapusdata(id) { 
		swal({
		  title: "Apakah Anda Yakin?",
		  text: "Data yang dihapus akan hilang dari database!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Ya, Hapus!",
		  cancelButtonText: "Tidak",
		  closeOnConfirm: false
		},
		function(){
		  location.href = "#";
		  swal("Deleted!", "Your imaginary file has been deleted.", "success");
		});
	}
  function editdata(id) { 
		swal({
		  title: "Apakah Anda Yakin?",
		  text: "Anda Akan Mengedit Data Anda!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Ya, Edit!",
		  cancelButtonText: "Tidak",
		  closeOnConfirm: false
		},
		function(){
		  location.href = "#";
		});
	}
  </script>
  <script src="public/js/select2.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#nis").select2({
				placeholder: "Silahkan Pilih NIS Siswa"
			});
			$("#kelas").select2({
				placeholder: "Silahkan Pilih Kelas Siswa"
			});
		});
	</script>
</body>