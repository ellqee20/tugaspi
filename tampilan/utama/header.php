<!DOCTYPE html>
<html lang="en">
	<title>Sistem Absensi</title>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="public/css/utama/bootstrap.css" media="screen">
		<link rel="stylesheet" href="public/css/utama/bootstrap.min.css">
		<script src="public/js/jquery-2.1.4.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="public/css/sweetalert/sweet-alert.css">
		<script src="public/js/sweet-alert.js"></script>
	</head>
	<div class="container">
	<div class="row">
		<center>
		<h2 class="text-info" ><b>SMP FAHRI FIRDAUSILAH</b></h2>
		<br>
		<p class="text-warning">"Dibuat untuk memenuhi tugas mata kuliah pemprograman internet"</p>
		</center>
	</div>
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
				<li><a href="index.php"> HOME</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li class="dropdown"> 
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span> <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a data-toggle="modal" data-target="#login-admin"><span class="glyphicon glyphicon-user"></span> &nbsp Login Sistem Admin</a></li>
			  </ul>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
	<!-- MODAL LOGIN START -->
	<div class="modal fade" id="login-admin" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header" style="background-color:#149c82">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<br/>
					<center><h4 class="modal-title" id="Login"><b>LOGIN ADMINISTRATOR</b></h4></center>
					<br/>
					<center><h4 class="modal-title" id="Login">Sistem Absensi Siswa</h4></center>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group has-success">
							<input type="username" name="user" class="form-control" id="username-modal" placeholder="Masukkan Username">
						</div>
						<div class="form-group has-success">
							<input type="password" name="pass" class="form-control" id="password-modal" placeholder="Masukkan Password">
						</div>
						<br></br>
						<center><button type="submit" name="submitadmin" class="btn btn-success"><i class="fa fa-sign-in"></i> &nbsp Login / Masuk</button></center>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL LOGIN END -->

<?php
	error_reporting(0);
	include "fungsi/fungsi.php";
	$conn = connectdb();
	if (isset($_POST['submitadmin'])){
		loginadmin();
	}
?>