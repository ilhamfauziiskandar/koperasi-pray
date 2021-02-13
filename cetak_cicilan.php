<?php
  ob_start();
  include_once "config/database.php";
  $db = new database();
  $id_cicilan = $_GET['id_cicilan'];
  $id_pinjaman = $_GET['id_pinjaman'];
  $ambil = null;
if(isset($id_pinjaman) && isset($id_cicilan)){
        // var_dump($id_pinjaman,$id_cicilan);die;
     $ambil = $db->cetak_cicilan($id_pinjaman,$id_cicilan);

?>

<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
</head>
    <body>
        <table >
            <tr>
                <th style="width: 60px"></th>
                <th><br><img src="img/koperasi.png" width="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>
                    <p align="center"><b>
                      Koperasi Mandiri<br>
                      JKp.Cikembang Rt.01 Rw.07 Desa Cikembang Kec.Kertasari<br>
                       Kab.Bandung, JawaBarat<br></b>
                    </p>
                </th>
            </tr>
        </table>
          <hr>
        <p align="center">
          <b>Kwitansi Koperasi Mandiri</b>
        </p>
        <table>
          <tr>
            <td style="width: 210px"></td>
            <td style="width: 210px"></td>
            <td style="width: 210px">No Kwitansi : <?= $ambil['id_pinjaman'];?>/<?= $ambil['tgl_nyicil'];?> </td>
          </tr>
        </table>
        <br>
        <table>
          <tr>
            <td style="width: 210px">Sudah diterima dari</td>
            <td>:</td>
            <td>&nbsp;<?php echo $ambil['nama_anggota']; ?></td>
          </tr>
          <tr>
            <td>Pokok Pinjaman</td>
            <td>:</td>
            <td>&nbsp;Rp.&nbsp;<?php echo number_format ($ambil['pokok_pinjaman']); ?></td>
          </tr>
          <tr>
            <td>Jasa</td>
            <td>:</td>
            <td>&nbsp;Rp.&nbsp;<?php echo number_format ($ambil['jasa']); ?></td>
          </tr>
          <tr>
            <td>Angsuran Ke </td>
            <td>: </td>
            <td>&nbsp;<?php echo $ambil['bulan']; ?> </td>
          </tr>
          <tr>
            <td>Sisa Angsuran</td>
            <td>: </td>
            <td>&nbsp;Rp.&nbsp;<?php echo number_format ($ambil['sisa']); ?> </td>
          </tr>
          <tr>
            <td>Uang sebesar</td>
            <td>: </td>
            <td>&nbsp;Rp.&nbsp;<?php echo number_format ($ambil['jumlah']); ?> </td>
          </tr>
        </table>
        <br><br>
        <table  style="border-collapse: collapse;">
          <tr>
            <td style="width: 210px"></td>
            <td style="width: 210px"></td>
            <td style="width: 210px">Bandung , <?php echo $ambil['tgl_nyicil']; ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>Petugas</td>
          </tr>
          <tr>
            <td style="height: 70px"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>Admin Koperasi Mandiri</td>
          </tr>
        </table>
         
    </body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php } ?>
<?php

$filename=$ambil['id_cicilan']."-Kwitansi Al-Hikmah".".pdf"; //nama file pdf

$content = ob_get_clean();
   require_once('/html2pdf/html2pdf.class.php');
   try
   {
    $html2pdf = new HTML2PDF('L','A5','en', false, 'ISO-8859-15',array(17, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->pdf->SetTitle('Kwitansi Al-Hikmah');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    ob_end_clean();
    $html2pdf->Output($filename);
   }
   catch(HTML2PDF_exception $e) { echo $e; }
?>