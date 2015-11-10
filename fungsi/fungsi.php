<?php
	//FUNGSI KONEKSI DATABASE
	function connectdb(){
		$host = "localhost";
		$user = "root";
		$pass = "gapakepassw0rd";
		$dbase= "absensismp";
		$conn = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
		return $conn;
	}
	//FUNGSI LOGIN SLMW
	function loginadmin(){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$conn = connectdb();
		$sql="SELECT * FROM tb_akun WHERE username='$user'";
		$ssql=$conn->query($sql);
		$row=$ssql->fetch(PDO::FETCH_ASSOC);
		if(($row['username']==$user)and($row['password']==$pass))
		{
			session_start();
			$_SESSION['usernameadmin'] = $row['username'];
			echo "<script>alertberhasillogin()</script>";
		}
		else
		{
			echo "<script>swal('Maaf!', 'Username dan Password Anda Salah', 'error')</script>";
		}
	}
	//FUNGSI LOGOUT SLMW
	function logoutadmin(){
		$usernameadmin=$_SESSION['usernameadmin'];
		session_destroy();
		echo "<script>alertberhasillogout()</script>";
	}
	?>
	<script>
		function alertberhasillogin() { 
		swal({
		  title: "Selamat",
		  text: "Anda Berhasil Login ke Sistem",
		  type: "success",
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "OKE",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			top.location="index.php";
		  }
		});
	}
		function alertberhasilmenambahkandata() { 
		swal({
		  title: "Selamat",
		  text: "Anda Berhasil Menambahkan Data",
		  type: "success",
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "OKE",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			top.location="index.php?page=data";
		  }
		});
	}
		function alertberhasilmengeditdata() { 
		swal({
		  title: "Selamat",
		  text: "Anda Berhasil Mengedit Data Anda",
		  type: "success",
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "OKE",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			top.location="../../../../index.php?page=data";
		  }
		});
	}
		function alertberhasilmengeditdataspihresiko() { 
		swal({
		  title: "Selamat",
		  text: "Anda Berhasil Mengedit Data Anda",
		  type: "success",
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "OKE",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			top.location="../../../../index.php?page=data-resiko";
		  }
		});
	}
		function alertberhasilmengeditdataspihibuhamil() { 
		swal({
		  title: "Selamat",
		  text: "Anda Berhasil Mengedit Data Anda",
		  type: "success",
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "OKE",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			top.location="../../../../index.php?page=data-ibuhamil";
		  }
		});
	}
		function alertberhasillogout() { 
		swal({
		  title: "Selamat",
		  text: "Anda Berhasil Logout dari Sistem",
		  type: "success",
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "OKE",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			document.location="index.php";
		  }
		});
	}
	</script>
<?php
?>