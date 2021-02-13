<?php 
 
class database{
 	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_koperasi";
 	//koneksi database
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}
	//tampil data Anggota
	function tampil_data(){
		$data = mysql_query("select * from anggota order by id_anggota desc");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_pinjaman($id){
		$data = mysql_query("select * from pinjaman where id_anggota='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_anggota($id){
		$data = mysql_query("select * from anggota where id_anggota='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_data_simpanan($id){
		$data = mysql_query("select * from simpanan where id_anggota='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function check_data_simpan($id){
		$data = mysql_query("select * from simpanan where id_anggota='$id'");
		while($d = mysql_fetch_row($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_minjam($id){
		$data = mysql_query("select * from pinjaman where id_pinjaman='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_cicil($id){
		$data = mysql_query("select * from cicilan where id_anggota='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_data_pinjaman($id){
		$data = mysql_query("SELECT pinjaman.id_pinjaman, pinjaman.tgl_meminjam, pinjaman.nama_anggota, SUM(simpanan.jumlah) AS jumlah, pinjaman.meminjam, pinjaman.sisa, pinjaman.bulan, pinjaman.keperlluan, pinjaman.status FROM pinjaman INNER JOIN simpanan ON pinjaman.id_anggota = simpanan.id_anggota WHERE pinjaman.id_anggota = $id GROUP BY pinjaman.id_pinjaman ORDER BY tgl_meminjam DESC");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function check_pinjaman($id){
		$data = mysql_query("SELECT * FROM `pinjaman` WHERE `id_anggota` = $id GROUP BY `status` DESC LIMIT 1");
		while($d = mysql_fetch_row($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function check_data_pinjaman($id){
		$data = mysql_query("SELECT * FROM `pinjaman` WHERE `id_anggota` = $id");
		while($d = mysql_fetch_row($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	//tampil data User
	function tampil_data_user(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	//tampil data Cicilan
	function tampil_data_cicilan($id){
		$data = mysql_query("select * from cicilan where id_pinjaman='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_atu_cicilan($id){
		$data = mysql_query("select * from cicilan where id_pinjaman='$id' ORDER BY bulan desc limit 1");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function tampil_data_sisa($id){
		$data = mysql_query("select * from cicilan where id_pinjaman='$id' group by id_pinjaman");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	//proses input Anggota
	function input_anggota($tgl_masuk,$nama_anggota,$tempat,$tgl_lahir,$pekerjaan,$alamat){
		mysql_query("insert into anggota values('','$tgl_masuk','$nama_anggota','$tempat','$tgl_lahir','$pekerjaan','$alamat')");
	}
	//proses input Pinjaman
	function input_pinjaman($tgl_meminjam,$nama_anggota,$id_anggota,$bulan,$meminjam,$keperluan){

		mysql_query("insert into pinjaman values('','$tgl_meminjam','$nama_anggota','$id_anggota','$bulan','$meminjam','$meminjam','$keperluan','1')");

		
	}
	function hitung_simpanan($id){
		
		$data = mysql_query("SELECT sum(jumlah) as total, jumlah FROM `simpanan` WHERE id_anggota='$id' && tgl_menyimpan BETWEEN (CURRENT_DATE() - INTERVAL 2 MONTH) AND CURRENT_DATE()");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
		
	}
	function input_simpanan($tgl_nyimpan,$id_anggota,$nama_anggota,$jumlah){
		mysql_query("insert into simpanan values('','$tgl_nyimpan','$id_anggota','$nama_anggota','$jumlah')");
	}
	//proses input Cicilan
	function input_cicilan($id_anggota,$id_pinjaman,$tgl_transaksi,$pokok_pinjaman, $sisa, $angsuran_pokok, $jasa, $cicilan, $bulan){
		 $result = mysql_query("SELECT * FROM pinjaman where id_anggota= '$id_anggota' AND id_pinjaman='$id_pinjaman'");
				 while($rslt = mysql_fetch_array($result)){
				 	$bulan_pinjam = $rslt['bulan'];
				 }
		 if ($bulan_pinjam >= $bulan) {
		 	$result = mysql_query("SELECT * FROM cicilan where id_anggota= '$id_anggota' AND id_pinjaman='$id_pinjaman' AND bulan='$bulan'");
				 while($d = mysql_fetch_array($result)){
				 	$hasil = $d['bulan'];
					
				 }
		 	if ($bulan !== $hasil) {
				mysql_query("insert into cicilan values('','$id_pinjaman','$id_anggota','$tgl_transaksi','$pokok_pinjaman','$sisa','$cicilan','$bulan','$jasa','$cicilan')");
			}else{
		 }
		 
		}
	}
	function update_sisa($id_pinjaman){
		$data = mysql_query("select min(sisa) as total from cicilan where id_pinjaman='$id_pinjaman'");
        while($d = mysql_fetch_array($data)){
        	$total = $d['total'];
			mysql_query("update pinjaman set sisa='$total' where id_pinjaman='$id_pinjaman'");
        }
	}
	function update_status($id_pinjaman,$id_anggota){
			mysql_query("update pinjaman set status='0' where id_pinjaman='$id_pinjaman' and id_anggota='$id_anggota'");
	}
	//proses Hapus Anggota
 	function hapus_anggota($id){
		mysql_query("delete from anggota where id_anggota='$id'");
	}
    function nabung($id_anggota,$total){
            mysql_query("update anggota set jumlah='$total' where id_anggota='$id_anggota'");
	}
    function nyicil($id){
		$data = mysql_query("select sum(sisa-cicilan) as total from pinjaman where id_anggota='$id'");
        while($d = mysql_fetch_array($data)){
            $total = $d['total'];
            mysql_query("update pinjaman set sisa='$total' where id_anggota='$id'");
        }
	}
    
	//proses Hapus Pinjaman
 	function hapus_pinjaman($id){
		mysql_query("delete from pinjaman where id_pinjaman='$id'");
	}
	//proses Hapus Cicilan
	function hapus_cicilan($id){
		mysql_query("delete from cicilan where id_cicilan='$id'");
	}
	//proses pengambilan ID Anggota
	function edit_anggota($id){
	$data = mysql_query("select * from anggota where id_anggota='$id'");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
	}
	//proses pengambilan ID Pinjaman
	function edit_pinjaman($id){
	$data = mysql_query("select * from pinjaman where id_pinjaman='$id'");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
	}
	//proses pengambilan ID Cicilan
	function edit_cicilan($id){
	$data = mysql_query("select * from cicilan where id_cicilan='$id'");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
	}

 	//proses edit Anggota
	function update_anggota($id, $nama_anggota,$tempat,$tgl_lahir,$pekerjaan,$alamat,$simpanan_pokok,$simpanan_wajib,$simpanan_sukarela){
	$jumlah = $simpanan_wajib + $simpanan_sukarela;
	mysql_query("update anggota set nama_anggota='$nama_anggota', tempat='$tempat', tgl_lahir='$tgl_lahir', pekerjaan='$pekerjaan', alamat='$alamat' where id_anggota='$id'");
	}
	//proses edit Cicilan
	function update_cicilan($id, $tanggal_transaksi,$tanggal_batas_bayar,$saldo,$status){
	mysql_query("update cicilan set tgl_transaksi='$tanggal_transaksi', tgl_batas_bayar='$tanggal_batas_bayar', saldo_cicilan='$saldo', status_cicilan='$status' where id_cicilan='$id'");
	}
	function update_pinjaman($id,$nama_anggota,$no_anggota,$jumlah_simpanan,$sisa,$keperluan){
	mysql_query("update pinjaman set nama_anggota='$nama_anggota', no_anggota='$no_anggota', jumlah_simpanan='$jumlah_simpanan', sisa='$sisa' where id_pinjaman='$id'");
	}

	function lap_simpan($id_anggota,$tgl1,$tgl2){
		$result = mysql_query("SELECT * FROM `simpanan` WHERE id_anggota = '$id_anggota' && tgl_menyimpan BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_menyimpan ASC");

			while ($d = mysql_fetch_array($result)) {
				$hasil[] = $d;
			}
			return $hasil;
	}

	function pembukuan($tgl1,$tgl2){
		$result = mysql_query("SELECT `nama_anggota`,`jumlah`,`tgl_menyimpan`, SUM(`jumlah`) as total FROM `simpanan` WHERE `tgl_menyimpan` BETWEEN '$tgl1' AND '$tgl2' GROUP BY `id_anggota`");

			while ($d = mysql_fetch_array($result)) {
				$hasil[] = $d;
			}
			return $hasil;
	}	

	public function cetak_cicilan($id_pinjaman,$id_cicilan){
		$result = mysql_query("SELECT pinjaman.nama_anggota, cicilan.id_cicilan,cicilan.id_pinjaman,cicilan.tgl_nyicil,cicilan.pokok_pinjaman,cicilan.jasa,cicilan.bulan,cicilan.jumlah,cicilan.sisa FROM  `pinjaman`,`cicilan` where id_cicilan = '$id_cicilan' && pinjaman.id_pinjaman='$id_pinjaman'");
			$d = mysql_fetch_array($result);
		return $d;	
	}
	public function cetak_laporan_simpanan($id_anggota,$tgl1,$tgl2){
		$result = mysql_query ("SELECT * FROM `simpanan` WHERE id_anggota = '$id_anggota' && tgl_menyimpan BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_menyimpan ASC");
		while ($d = mysql_fetch_array($result)) {
				$hasil[] = $d;
			}
			return $hasil;
	}
	public function belum_lunas(){
		$result = mysql_query("select * from pinjaman where status= '1'");
		return $result;
	}
	public function jumlah_anggota(){
		$result = mysql_query("select * from anggota");
		return $result;
	}
}
?>