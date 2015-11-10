<body>
  <div class="container">
	  <center><legend>Manage Data Siswa</legend></center>
	  <a href="index.php?page=tambah-data-siswa" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> &nbsp Tambah Data Siswa Baru</a>
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
			<td> <center><font color='black' size='2.5'><b>Nama</b></font></td>
			<td> <center><font color='black' size='2.5'><b>NIS</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Kelamin</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Tgl Lahir</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Alamat</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Ortu Wali</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Agama</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Gol. Darah</b></font></td>
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
			$ssql = $conn -> query("SELECT * FROM tb_siswa s inner join tb_kelamin kel inner join tb_agama ag inner join tb_goldarah gd on s.id_kelamin=kel.id_kelamin AND s.id_agama=ag.id_agama AND s.id_goldarah=gd.id_goldarah");
		}
			$nomor = 1;
			foreach($ssql as $row)
			{
				$id = $row['id_siswa'];	
				echo "<tr class='info' align='center'>";
				echo"<td><font color='black' size='2.5'>" .$nomor."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['nama_lengkap']."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['nis']."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['nama_kelamin']."</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['tgl_lahir']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['alamat']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['ortu_wali']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['nama_agama']. "</font></td>";
				echo"<td><font color='black' size='2.5'>". $row['nama_goldarah']. "</font></td>";
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
		});
	</script>
</body>