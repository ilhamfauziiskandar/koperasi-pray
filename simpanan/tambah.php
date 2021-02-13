<?php
error_reporting(0);
include '../config/database.php';
$db = new database();
?>
                      <h4>Form Input Simpanan</h4>
  
                      <form method="post" action="proses.php?aksi=tambah_simpanan">  
                    <?php $tanggal = date('Y-m-d'); ?>
                    <?php
                            foreach($db->edit_anggota($_GET['id_anggota']) as $d){
                      ?>  
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Menyimpan</label>
                      <input type="hidden" name="id_anggota" value="<?php echo $d['id_anggota'] ?>">
                      <input type="date" class="form-control" id="exampleInputCity1" name="tgl_nyimpan" required="" placeholder="Tanggal Menyimpan" value="<?php echo $tanggal ?>" readonly="">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputCity1">Nama Anggota</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Anggota" required="" name="nama_anggota" value="<?php echo $d['nama_anggota'] ?>" readonly="">
                    </div>
                  <?php } ?>
                    <div class="form-group">
                      <label for="exampleInputCity1">Jumlah Simpanan</label>
                      <input type="number" class="form-control" id="exampleInputCity1" name="jumlah" required="" placeholder="Simpanan Pokok" min="0">
                    </div>
                    <input type="submit" class="btn btn-success" name="" value="Simpan">
                    <a href="index.php?pages=simpanan&id_anggota=<?php echo $id = $_GET['id_anggota']; ?>" class="btn btn-danger">Batal</a>
                    </form>