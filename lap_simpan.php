<?php 
$id_anggota = $_GET['id_anggota'];
  
?>
<?php $kon = mysqli_connect("localhost","root","","db_koperasi"); 
      if (isset($_POST['cetak'])) {
          $id_anggota = mysql_real_escape_string ($_POST['id_anggota']);
          $tgl1 = mysql_real_escape_string ($_POST['tgl1']);
          $tgl2 = mysql_real_escape_string ($_POST['tgl2']);
          $result = mysqli_query ($kon , "SELECT * FROM `simpanan` WHERE id_anggota = '$id_anggota' && tgl_menyimpan BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_menyimpan ASC");
       }
?>

                      <h4>Laporan Simpanan</h4>
                      <br>
                      <form class="forms-sample" method="post" action="cetak.php" target="_blank">
                        <?php 
                         // foreach($db->edit_anggota($_GET['id_anggota']) as $d){   
                        ?>
                        <div class="form-group" hidden="">
                          <label>ID Anggota</label>
                          <input type="text" class="form-control" name="id_anggota" value="<?php echo $id_anggota ?>">
                        </div>
                        <?php //} ?>
                        <div class="form-group">
                          <label for="tgl1">Tanggal Awal </label>
                          <input type="date" class="form-control" name="tgl1" >
                        </div>
                        <div class="form-group">
                          <label for="tgl1">Tanggal Akhir </label>
                          <input type="date" class="form-control" name="tgl2">
                        </div>
                        <button type="submit" class="btn btn-success mr-1" name="cetak">Cetak</button>
                        <a href="index.php?pages=simpanan&id_anggota=<?php echo $id_anggota = $_GET['id_anggota']; ?>" class="btn btn-danger" >Kembali</a>
                      </form>
                     <br>
                   <br>