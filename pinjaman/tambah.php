<?php
error_reporting(0);
include '../config/database.php';
include '../config/koneksi.php';
$db = new database();
?>

                      <h2>Form Input Pinjaman</h2>
                      <hr />
                      <form method="POST" action="proses.php?aksi=tambah_pinjaman">  
                    <?php $tgl = date('Y-m-d'); ?>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Meminjam</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="tgl_meminjam" placeholder="Tanggal Masuk" value="<?php echo $tgl; ?>" readonly="">
                    </div>
                      <?php
                            foreach($db->edit_anggota($_GET['id_anggota']) as $d){
                      ?> 
                      <div class="form-group">
                      <label for="exampleInputCity1">Nama Anggota</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Anggota" name="nama_anggota" readonly="" value="<?php echo $d['nama_anggota'] ?>">
                    </div>
                    <div class="form-group" >
                      <input type="hidden" class="form-control" id="exampleInputCity1" placeholder="No. Anggota" name="id_anggota" readonly="" value="<?php echo $d['id_anggota'] ?>">
                    </div>
                    <?php } ?>
                    <?php
                           foreach($db->hitung_simpanan($_GET['id_anggota']) as $d){
                      ?>  
                    <div class="form-group">
                      <label for="exampleInputCity1">Jumlah Simpanan</label>
                      <input type="number" class="form-control" id="exampleInputCity1" placeholder="Jumlah Simpanan" name="jumlah_simpanan" readonly="" value="<?php echo $d['total'] ?>">
                    </div>
                  <?php } ?>
                    <div class="form-group">
                      <label for="exampleInputCity1">Meminjam Sebesar</label>
                      <input type="number" class="form-control" id="exampleInputCity1" name="meminjam" placeholder="Meminjam Sebesar" min="0" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Bulan</label>
                      <input type="number" class="form-control" id="exampleInputCity1" name="bulan" placeholder="Banyak Bulan Menyicil" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Keperluan</label>
                      <textarea name="keperluan" class="form-control" id="exampleInputCity1" placeholder="Keperluan"> </textarea>
                      <input type="number" class="form-control" id="exampleInputCity1" name="status" value="0"placeholder="Banyak Bulan Menyicil" required="" hidden="">
                    </div>
                    <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
                    <a href="index.php?pages=pinjaman&id_anggota=<?php echo $id_anggota=$_GET['id_anggota']?>" class="btn btn-danger">Kembali</a>
                    </form>
                    <hr />
                  