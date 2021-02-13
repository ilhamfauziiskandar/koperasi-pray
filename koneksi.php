<?php
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
$username = "root";
$password = "";
$database = "db_koperasi";

mysql_connect($server,$username,$password);
$conn=mysql_connect($server,$username,$password);

mysql_select_db($database);


function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

function average($arr){
   if (!is_array($arr)) return false;
   return array_sum($arr)/count($arr);
}
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}

function cek_session_admin(){
	$level = $_SESSION[level];
	if ($level != 'superuser' AND $level != 'client' AND $level != 'worker'){
		echo "<script>document.location='index.php';</script>";
	}
}

function cek_session_client(){
	$level = $_SESSION[level];
	if ($level != 'client'){
		echo "<script>document.location='index.php';</script>";
	}
}

function cek_session_siswa(){
	$level = $_SESSION[level];
	if ($level == 'worker'){
		echo "<script>document.location='index.php';</script>";
	}
}

function timeago($datetime, $full = false) {
		$date = new \DateTime();
		$date->setTimestamp(timestamp);
		$interval = $date->diff(new \DateTime('now'));
		echo $interval->format('%d days, %h hours and %i minutes ago');
}

?>