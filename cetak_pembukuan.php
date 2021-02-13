<?php 
  
  ob_start();
  include_once "config/database.php";
  $db = new database(); 
  $tgl1 = $_POST['tgl1'];
  $tgl2 = $_POST['tgl2'];
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
</head>
  <body>
    <table>
      <tr>
        <th><br><img src="img/koperasi.png" width="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th><p align="center" style="font-size:125%;"><b>Koperasi Mandiri<br>Kp.Cikembang Rt.01 Rw.07 Desa Cikembang Kec.Kertasari<br>Kab.Bandung, JawaBarat</b></p>
        </th>
      </tr>
    </table>
    <hr>
    <p align="center" style="font-size:120%;">
    	<b>LAPORAN SIMPANAN KOPERASI MANDIRI</b>
    	<br>
    	<b>Bulan <?php echo date('M Y', strtotime($tgl1)); ?></b>
    </p>
    <div class="table-responsive" align="center">
      <table class="table" border="1" align="center">
          <tr>
            <th width="300px" >Nama</th>
            <th width="300px" >Menyimpan</th> 
            <th width="300px">Jumlah Simpanan</th>
          </tr>
        <?php 
            foreach($db->pembukuan($tgl1,$tgl2) as $ambil){
        ?>
          <tr>
            <td><?php echo $ambil['nama_anggota']; ?></td>
            <td>Rp. <?php echo number_format($ambil['jumlah'], 0, ".",".")?></td>
            <td>Rp. <?php echo number_format($ambil['total'], 0, ".",".")?></td>
          </tr>
        <?php } ?>
      </table>
    </div>
            
</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename=$s."-Laporan Simpanan Koperasi Mandiri".".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
 require_once('html2pdf/html2pdf.class.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(20, 20, 20, 10));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->pdf->SetTitle('Laporan Al-Hikmah');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  ob_end_clean();
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>