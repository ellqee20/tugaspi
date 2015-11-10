<body>
  <div class="container">
	  <center><legend>Tambah Absensi Hari Ini</legend></center>
	  <br></br>
		<div class="row">
		  <div class="col-md-5">
			<form method="post" class="form-horizontal">
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
		<div>
			  <center>
			  <button type="submit" name="caridata" class="btn btn-success">Proses Absensi</button>
			  <a href="index.php?page=data-absensi" class="btn btn-danger" name="cancel">Cancel</a>
			  </center>
			  </div>
		</div>
	</center>
  </div>
</body>
<script src="public/js/select2.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#kelas").select2({
				placeholder: "Silahkan Pilih Kelas"
			});
		});
	</script>