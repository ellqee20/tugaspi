<?php
	session_start();
	if (isset($_SESSION['usernameadmin']))
	{
	include "tampilan/admin/header.php";
	
		if (isset($_GET['page'])){
			switch($_GET['page']){
				case 'data-siswa':
					include "tampilan/admin/body/data-siswa/lihat-data.php";
					break;
				case 'tambah-data-siswa':
					include "tampilan/admin/body/data-siswa/tambah-data.php";
					break;	
				case 'data-kelas':
					include "tampilan/admin/body/data-kelas/lihat-data.php";
					break;
				case 'tambah-data-kelas':
					include "tampilan/admin/body/data-kelas/tambah-data.php";
					break;
				case 'data-kelas-siswa':
					include "tampilan/admin/body/data-kelas-siswa/lihat-data.php";
					break;
				case 'tambah-data-kelas-siswa':
					include "tampilan/admin/body/data-kelas-siswa/tambah-data.php";
					break;
				case 'data-absensi':
					include "tampilan/admin/body/data-absensi/lihat-data.php";
					break;
				case 'absensi':
					include "tampilan/admin/body/data-absensi/tambah-data.php";
					break;
				case 'home':
					include "tampilan/admin/body/home/home.php";
					break;
				default:
					include "tampilan/admin/body/home/home.php";
					break;
			}
		}
		else {
		include "tampilan/admin/body/home/home.php";
		}
		
	include "tampilan/admin/footer.php";
	}
	else
	{
	include "tampilan/utama/header.php";
	
		if (isset($_GET['page'])){
			switch($_GET['page']){
				case 'home':
					include "tampilan/utama/body/home/home.php";
					break;
				default:
					include "tampilan/utama/body/home/home.php";
					break;
			}
		}
		else {
		include "tampilan/utama/body/home/home.php";
		}
	include "tampilan/utama/footer.php";
	}
?>



