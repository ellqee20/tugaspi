<body>
  <div class="container">
	  <center><legend>Manage Data Absensi</legend></center>
	  <a href="index.php?page=absensi" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> &nbsp Absen Untuk Hari Ini</a>
	  <br></br>
	  <br></br>
		<div class="row">
		  <div class="col-md-5">
			<form method="post" class="form-horizontal">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-4 control-label input-sm">Tanggal :</label>
			  <div class="col-lg-6">
				<input type="text" id="tanggal" data-date-format="yyyy-mm-dd" class="form-control input-sm" name="tanggal" required />
			  </div>
			 </div>
			 <div class="form-group">
			  <label for="inputEmail" class="col-lg-4 control-label input-sm">Nama Kelas :</label>
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
		<br>
		<div class="container table-responsive">
		<table class="table table-striped table-hover table-bordered table-responsive">
		 <tr class="danger">
			<td> <center><font color='black' size='2.5'><b>No</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Tanggal</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Nama</b></font></td>
			<td> <center><font color='black' size='2.5'><b>NIS</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Kelas</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Status</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Edit</b></font></td>
		</tr>
		<?php
/*		
		if (isset($_POST['tampilsemuadata'])){
			$ssql = $conn -> query("SELECT * FROM tb_siswa");
		}
		elseif (isset($_POST['caridata'])){
			$noregistrasi = $_POST['noregistrasi'];
			$ssql = $conn -> query("SELECT * FROM tb_siswa WHERE nama_lengkap LIKE '%".$nama."%'");
		}
		else {
			$ssql = $conn -> query("SELECT * FROM tb_siswa");
		}
			$nomor = 1;
			foreach($ssql as $row)
			{
				$id = $row['id_siswa'];	
				echo "<tr class='info' align='center'>";
				echo"<td><font color='black' size='2.5'>" .$nomor."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['nama_lengkap']."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['id_kelamin']."</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['tgl_lahir']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['alamat']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['ortu_wali']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['id_agama']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['id_goldarah']. "</font></td>";
				echo"<td> <a onclick='editdata($id)' class='btn btn-primary btn-xs'><center><span class='glyphicon glyphicon-refresh'></span> &nbsp Edit</center></a>";
				echo"<td> <a onclick='hapusdata($id)' class='btn btn-danger btn-xs'><center><span class='glyphicon glyphicon-remove'></span> &nbsp Delete</center></a>";		
				echo "</tr>";
				$nomor++;
			}
*/		
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
		  location.href = "fungsi/hapusdata_slmw.php?iyuh="+id;
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
		  location.href = "tampilan/slmw/body/data/edit-data.php?id="+id;
		});
	}
  </script>
  <script>
		$('#tanggal').datepicker();
</script>
<script src="public/js/select2.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#kelas").select2({
				placeholder: "Silahkan Pilih Kelas Siswa"
			});
		});
	</script>
</body>