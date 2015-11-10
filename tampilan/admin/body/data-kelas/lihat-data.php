<body>
  <div class="container">
	  <center><legend>Manage Data Kelas</legend></center>
	  <a href="index.php?page=tambah-data-kelas" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> &nbsp Tambah Kelas Baru</a>
	  <br></br>
		<div class="container table-responsive">
		<table class="table table-striped table-hover table-bordered table-responsive">
		 <tr class="danger">
			<td> <center><font color='black' size='2.5'><b>No</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Kelas</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Edit</b></font></td>
			<td> <center><font color='black' size='2.5'><b>Delete</b></font></td>
		</tr>
		<?php
		
			$ssql = $conn -> query("SELECT * FROM tb_kelas");
		
			$nomor = 1;
			foreach($ssql as $row)
			{
				$id = $row['id_kelas'];	
				echo "<tr class='info' align='center'>";
				echo"<td><font color='black' size='2.5'>" .$nomor."</font></td>";
				echo"<td><font color='black' size='2.5'>" .$row['nama_kelas']."</font></td>";
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
</body>