<?php  
	
	// inisialisasi session
	session_start();

	// data konek mysql
	$host 		= 'localhost';
	$user 		= 'root';
	$password 	= '';
	$db_name 	= 'db_olshop';

	$connect = new mysqli($host, $user, $password, $db_name);

	if ($connect->connect_error) {
		die('Koneksi gagal! '. $connect->connect_error);
	}

	function redirect($url) {
		echo '<meta http-equiv="refresh" content="0; url='.$url.'" />';
	}

	function js($text) {
		echo '<script>alert("'. $text .'")</script>';
	}

	function base_url($url) {
		echo 'http://localhost/latihan/scope/'. $url .'';
	}
?>