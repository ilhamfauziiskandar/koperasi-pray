<?php 
  
  ob_start();
  include_once "config/database.php";
  $db = new database(); 
  $id_anggota = $_POST['id_anggota'];
  $tgl1 = $_POST['tgl1'];
  $tgl2 = $_POST['tgl2'];
  //var_dump($_POST);die;
          $result = $db->cetak_laporan_simpanan($id_anggota,$tgl1,$tgl2);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
</head>
  <body>
    <table>
      <tr>
        <th><br><img src="img/koperasi.png" width="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>
          <p align="center" style="font-size:125%;">
            <b>Koperasi Mandiri<br>
               Kp.Cikembang Rt.01 Rw.07 Desa Cikembang Kec.Kertasari<br>
                       Kab.Bandung, JawaBarat<br>
            </b>
          </p>
        </th>
      </tr>
    </table>
    <hr>
    <p align="center" style="font-size:120%;"><b><ins>LAPORAN SIMPANAN KOPERASI MANDIRI</ins></b></p>
   
    <p>Nama : <?php echo $result[0]['nama_anggota']; ?></p>
                  <div class="table-responsive" align="center">
                    <table class="table" border="1" align="center">
                      <thead>
                        <tr>
                          <th width="300px" >No</th>
                          <th width="300px" >Tanggal</th> 
                          <th width="300px">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $no = 1; 
                        foreach($db->cetak_laporan_simpanan($id_anggota,$tgl1,$tgl2) as $ambil){    
                          $jumlah[] = $ambil['jumlah'];
                          $total = array_sum($jumlah);
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $ambil['tgl_menyimpan']; ?></td>
                          <td>Rp. <?php echo number_format($ambil['jumlah'], 0, ".","."); ?></td>
                        </tr>
                      <?php } ?>

                        <tr>
                          <td></td>
                          <td>Jumlah :</td> 
                          <td>Rp.<?= number_format($total, 0, ".","."); ?></td>
                        </tr>
                      </tbody>
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