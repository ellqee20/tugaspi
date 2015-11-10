<!DOCTYPE html>
<html lang="en">
	<title>Sistem Absensi</title>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="public/css/admin/bootstrap.css" media="screen">
		<link rel="stylesheet" href="public/css/admin/bootstrap.min.css">
		<script src="public/js/jquery-2.1.4.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="public/css/sweetalert/sweet-alert.css">
		<script src="public/js/sweet-alert.js"></script>
		<link rel="stylesheet" href="public/bootstrap-datepicker/css/datepicker.css" />
		<script type="text/javascript" src="public/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="public/css/select2/select2.min.css"/>
	</head>
	<div class="alert alert-dismissible alert-info">
	  <center>
	  <h2>Sistem Absensi Siswa SMP FAHRI FIRDAUSILAH</h2>
	  <h4>Halaman Administrator</h4>
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
			<li><a href="index.php?page=data-siswa">Manage Data Siswa</a></li>
			<li><a href="index.php?page=data-kelas">Manage Kelas</a></li>
			<li><a href="index.php?page=data-kelas-siswa">Manage Data Kelas Siswa</a></li>
			<li><a href="index.php?page=data-absensi">Manage Data Absensi</a></li>
		  </ul>
		  <form method="POST" action="">
		  <ul class="nav navbar-nav navbar-right">
			<li><button type="submit" name="submitlogoutadmin" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-share-alt"></span> &nbsp LOGOUT</button></li>
		  </ul>
		  </form>
		</div>
	  </div>
	</nav>

<?php
	//error_reporting(0);
	include "fungsi/fungsi.php";
	$conn = connectdb();
	if (isset($_POST['submitlogoutadmin'])){
		logoutadmin();
	}
	elseif (isset($_POST['tambahdata'])){
		tambahdataslmw();
	}
	elseif (isset($_POST['editdata'])){
		editdataslmw($id);
	}
?>