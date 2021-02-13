<?php 
//include database
include 'config/database.php';
$db = new database();
//mengambil isi variabel aksi
$aksi = $_GET['aksi'];
session_start();
//proses Aksi mengambil data data dari form
 if($aksi == "tambah_anggota"){
 	$db->input_anggota($_POST['tgl_masuk'],$_POST['nama_anggota'],$_POST['tempat'],$_POST['tgl_lahir'],$_POST['pekerjaan'],$_POST['alamat']);
        
    
    $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil ditambahkan";
         
    header("location:index.php?pages=anggota");

 }elseif($aksi == "tambah_pinjaman"){ 
     $id = $_POST['id_anggota'];
     
     if ($_POST['jumlah_simpanan'] != NULL) {
        
        $jmlh_pinjaman[] = $db->check_data_pinjaman($id);
        
        if ($_POST['jumlah_simpanan'] >= 500000) {
            foreach($db->check_pinjaman($id) as $check){
                $status_p = $check[8];
            }
                if ($status_p == 0) {
                
                    $db->input_pinjaman($_POST['tgl_meminjam'], $_POST['nama_anggota'],$_POST['id_anggota'], $_POST['bulan'],$_POST['meminjam'],$_POST['keperluan']);
                    
                    $_SESSION['alert'] = 'sukses';
                    $_SESSION['isialert'] = "berhasil ditambahkan";
        
                    header("location:index.php?pages=pinjaman&id_anggota=$id");
                
                }else {
                    $_SESSION['alert'] = 'warning';
                    $_SESSION['isialert'] = "MAAF ANDA TIDAK DAPAT MELAKUKAN PINJAMAN, DIKARENAKAN AND MASIH MEMILIKI TUNGGAKAN";
        
                    header("location:index.php?pages=pinjaman&id_anggota=$id");
                }
                
        }else{
            $_SESSION['alert'] = 'warning';
            $_SESSION['isialert'] = "MAAF SIMPANAN KURANG DARI Rp. 500.000";

            header("location:index.php?pages=pinjaman&id_anggota=$id");
        }
        
    }else{

    $_SESSION['alert'] = 'warning';
    $_SESSION['isialert'] = "MAAF ANDA TIDAK DAPAT MELAKUKAN PINJAMAN, PASTIKAN ANDA MELAKUKAN SIMPANAN TERLEBIH DAHULU";
       
    header("location:index.php?pages=pinjaman&id_anggota=$id");
    
}
   
 }elseif($aksi == "tambah_simpanan"){ 
     $id = $_POST['id_anggota'];
     $jumlah = $_POST['jumlah'];
    // var_dump($jumlah1);die;
     $db->input_simpanan($_POST['tgl_nyimpan'], $_POST['id_anggota'],$_POST['nama_anggota'], $jumlah);
     
     $_SESSION['alert'] = 'sukses';
     $_SESSION['isialert'] = "berhasil ditambahkan";

     header("location:index.php?pages=simpanan&id_anggota=$id");

 }elseif($aksi == "tambah_cicilan"){
     $id = $_POST['id_pinjaman']; 	
 	$db->input_cicilan($_POST['id_anggota'], $_POST['id_pinjaman'],$_POST['tgl_transaksi'],$_POST['pokok_pinjaman'], $_POST['sisa'], $_POST['angsuran_pokok'], $_POST['jasa'], $_POST['cicilan'], $_POST['bulan']);
    header("location:index.php?pages=cicilan&id_pinjaman=$id");
    
    $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil ditambahkan";


 }elseif($aksi == "tambah_ketidak_aktifan"){
 	$db->input_ketidak_aktifan($_POST['no_faktur'],$_POST['nama_anggota'],$_POST['hutang'],$_POST['simpanan'],$_POST['isialert'],$_POST['tanggal_keluar']);
 	header("location:index.php?pages=ketidak_aktifan");

 }elseif($aksi == "hapus_anggota"){
     $db->hapus_anggota($_GET['id_anggota']);
     
    $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil dihapus";

 	header("location:index.php?pages=anggota");

 }elseif($aksi == "hapus_pinjaman"){
     $db->hapus_pinjaman($_GET['id_pinjaman']);
     
     $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil dihapus";

 	header("location:index.php?pages=pinjaman");

 }elseif($aksi == "hapus_cicilan"){
     $db->hapus_cicilan($_GET['id_cicilan']);
     
     $_SESSION['alert'] = 'sukses';
     $_SESSION['isialert'] = "berhasil dihapus";

 	header("location:index.php?pages=cicilan");

 }elseif($aksi == "hapus_ketidak_aktifan"){
     $db->hapus_ketidak_aktifan($_GET['id_status']);
     
     $_SESSION['alert'] = 'sukses';
     $_SESSION['isialert'] = "berhasil dihapus";

 	header("location:index.php?pages=ketidak_aktifan");

 }elseif($aksi == "edit_pinjaman"){
 	$db->update_pinjaman($_POST['id'], $_POST['nama_anggota'],$_POST['no_anggota'], $_POST['jumlah_simpanan'], $_POST['sisa'], $_POST['keperluan']);
    
     $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil diupdate";
    
     header("location:index.php?pages=pinjaman");	

 }elseif($aksi == "edit_anggota"){
 	$db->update_anggota($_POST['id'], $_POST['nama_anggota'],$_POST['tempat'],$_POST['tgl_lahir'],$_POST['pekerjaan'],$_POST['alamat']);
    
     $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil diupdate";
    
     header("location:index.php?pages=anggota");	

 }elseif($aksi == "edit_cicilan"){
 	$db->update_cicilan($_POST['id'], $_POST['tanggal_transaksi'], $_POST['tanggal_batas_bayar'], $_POST['saldo'], $_POST['isialert']);
    
     $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil diupdaten";
    
     header("location:index.php?pages=cicilan");

 }elseif($aksi == "edit_ketidak_aktifan"){
 	$db->update_ketidak_aktifan($_POST['id'], $_POST['no_faktur'],$_POST['nama_anggota'],$_POST['hutang'],$_POST['simpanan'],$_POST['isialert'],$_POST['tanggal_keluar']);
    
     $_SESSION['alert'] = 'sukses';
    $_SESSION['isialert'] = "berhasil diupdate";
    
     header("location:index.php?pages=ketidak_aktifan");

 }elseif($aksi == "cicil"){
 	$db->nyicil($_GET['id_anggota']);
 	header("location:index.php?pages=anggota");

 }elseif($aksi == "nabung"){
     $jumlah = $_POST['jumlah'];
     $simpan = $_POST['nabung'];
     $total = $jumlah + $simpan;
     $nabung = 25000;
     $sukarela = $jumlah - $nabung;
     $db->nabung($_POST['id_anggota'],$jumlah);
     header("location:index.php?pages=anggota");

 }elseif($aksi == "update_status"){
     $id_pinjaman = $_GET['id_pinjaman'];
     $id_anggota = $_GET['id_anggota'];
     $db->update_status($id_pinjaman,$id_anggota,$status);
     header("location:index.php?pages=pinjaman&id_anggota=$id_anggota");

 }elseif($aksi == "update_sisa"){
     $id = $_GET['id_pinjaman'];
     $db->update_sisa($id);
     header("location:index.php?pages=cicilan&id_pinjaman=$id");
 
 }elseif($aksi == "lap_simpan"){
     $id_anggota = $_POST['id_anggota'];
     $db->lap_simpan($_POST['id_anggota'], $_POST['tgl1'],$_POST['tgl2']);
     header("location:index.php?pages=lap_simpan&id_anggota=$id_anggota");
 
 }elseif($aksi == "pembukuan"){
     $db->pembukuan($_POST['tgl1'],$_POST['tgl2']);
     header("location:index.php?pages=pembukuan");
 
 }elseif($aksi == "cetak_cicilan"){
     $id_cicilan = $_GET['id_cicilan'];
     $id_pinjaman = $_GET['id_pinjaman'];
     $db->cetak_cicilan($id_cicilan, $id_pinjaman);
     header("location:index.php?pages=cetak_cicilan&id_pinjaman=$id_pinjaman&&id_cicilan=$id_cicilan");
 }
?>