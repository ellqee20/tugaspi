<?php
	session_start();
	if (isset($_SESSION['usernameslmw']))
	{
include "../../../../fungsi/fungsi.php";
	//error_reporting(0);
	$id =$_REQUEST['id'];
	$conn = connectdb();
	$ssql = $conn -> query("SELECT * FROM dataslmw WHERE id_penyakit  = '$id'");
	$row=$ssql->fetch(PDO::FETCH_ASSOC);
	
	$no_register=$row['no_register'];
	$nama_penderita=$row['nama_penderita'];
	$nama_kk=$row['nama_kk'];
	$alamat=$row['alamat'];
	$umur=$row['umur'];
	$tgl_berobat=$row['tgl_berobat'];
	$diagnosa=$row['diagnosa'];
	$keterangan=$row['keterangan'];
?>
<!DOCTYPE html>
<html lang="en">
	<title>Sistem Laporan Mingguan Wabah</title>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="../../../../public/css/slmw/bootstrap.css" media="screen">
		<link rel="stylesheet" href="../../../../public/css/slmw/bootstrap.min.css">
		<script src="../../../../public/js/jquery-2.1.4.min.js"></script>
		<script src="../../../../public/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../../../../public/css/sweetalert/sweet-alert.css">
		<script src="../../../../public/js/sweet-alert.js"></script>
	</head>
	<div class="alert alert-dismissible alert-info">
	  <center>
	  <h2>Sistem Laporan Mingguan Wabah</h2>
	  <h4>Puskesmas Ngemplak Simongan</h4>
	  </center>
	</div>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>	
		  <a class="navbar-brand" href="index.php?page=home"> &nbsp <span class="glyphicon glyphicon-home"></span> </a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="../../../../index.php?page=data">Manage Data Penyakit Menular</a></li>
			<li><a href="../../../../index.php?page=grafik">Lihat Data Grafik</a></li>
		  </ul>
		  <form method="POST" action="">
		  <ul class="nav navbar-nav navbar-right">
			<li><button type="submit" name="submitlogoutslmw" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-share-alt"></span> &nbsp LOGOUT</button></li>
		  </ul>
		  </form>
		</div>
	  </div>
	</nav>
<body>
  <div class="container">
	<center>
	<div class="panel panel-default">
		  <div class="panel-heading"><center>Edit Data Penyakit Menular (Wabah)</center></div>
		  <div class="panel-body">
		  <div class="row">
			<div class="col-lg-12">
				<form method="post">
				<table class="table table-striped table-hover table-bordered">
					<tr class="default">
						<td>No. Registrasi</td>
						<td><input type="hidden" class="form-control" name="no_register" value="<?php echo $no_register ?>"/><?php echo $no_register ?></td>
					</tr>
					<tr class="default">
						<td>Nama Penderita</td>
						<td><input type="text" class="form-control" name="nama_penderita" value="<?php echo $nama_penderita ?>" required /></td>
					</tr>
					<tr class="default">
						<td>Nama KK</td>
						<td><input type="text" class="form-control" name="nama_kk" value="<?php echo $nama_kk ?>" required /></td>
					</tr>
					<tr class="default">
						<td>Alamat Lengkap</td>
						<td><input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>" required /></td>
					</tr>
					<tr class="default">
						<td>Umur</td>
						<td><input type="text" class="form-control" name="umur" value="<?php echo $umur ?>" required /></td>
					</tr>
					<tr class="default">
						<td>Tanggal Berobat</td>
						<td><input type="date" class="form-control" name="tgl_berobat" value="<?php echo $tgl_berobat ?>" required /></td>
					</tr>
					<tr class="default">
						<td>Keterangan</td>
						<td><input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan ?>" required /></td>
					</tr>
					<tr class="default">
						<td>Diagnosa Penyakit</td>
						<td>
						<select class="form-control" name="diagnosa" id="select">
						  <option value="<?php echo $diagnosa ?>" selected><?php echo $diagnosa ?></option>
						  <option value="">--Pilih Diagnosa Penyakit Dibawah--</option>
						  <option value="Antrax" >Antrax</option>
						  <option value="Campak" >Campak</option>
						  <option value="Chikungunya" >Chikungunya</option>
						  <option value="DB (DBD)" >DB (DBD)</option>
						  <option value="Desenteri" >Desenteri</option>
						  <option value="Demam Bolak Balik" >Demam Bolak Balik</option>
						  <option value="Differi" >Differi</option>
						  <option value="Encephalitis" >Encephalitis</option>
						  <option value="Hepatitis" >Hepatitis</option>
						  <option value="Herpes" >Herpes</option>
						  <option value="Influenza" >Influenza</option>
						  <option value="ISPA" >ISPA</option>
						  <option value="Kolera Diare" >Kolera Diare</option>
						  <option value="Legionellosis" >Legionellosis</option>
						  <option value="Malaria" >Malaria</option>
						  <option value="Parotitis" >Parotitis</option>
						  <option value="Pertusis" >Pertusis</option>
						  <option value="Pes" >Pes</option>
						  <option value="Pneumonia (SARS,AI)" >Pneumonia (SARS,AI)</option>
						  <option value="Polio (AFP)" >Polio (AFP)</option>
						  <option value="Rabies" >Rabies</option>
						  <option value="Tifus Bercah Wabahi" >Tifus Bercah Wabahi</option>
						  <option value="Tifus Perut" >Tifus Perut</option>
						  <option value="Varicella" >Varicella</option>
						  <option value="Yellow Fever" >Yellow Fever</option>
						</select>
						</td>
					</tr>
					<tr class="default">
						<td>&nbsp;</td>
						<td><button type="submit" name="editdata" class="btn btn-primary">Edit Data</button> &nbsp; <a href="index.php?page=data" class="btn btn-danger" name="cancel">Cancel</a></td>
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
</html>
<?php
	if (isset($_POST['submitlogoutslmw'])){
		logoutslmw();
	}
	elseif (isset($_POST['tambahdata'])){
		tambahdataslmw();
	}
	elseif (isset($_POST['editdata'])){
		editdataslmw($id);
	}
?>
<?php
	}
?>
