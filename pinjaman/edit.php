<?php
error_reporting(0);
include '../config/database.php';
$db = new database();
?>
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Form Edit Pinjaman</h4>
                      <p class="card-description">
                        Silahkan isi form untuk edit data!
                      </p>
                      <form method="post" action="proses.php?aksi=edit_pinjaman">  
                          <?php
                          // Mengambil data berdasarkan ID
                            foreach($db->edit_pinjaman($_GET['id_pinjaman']) as $d){
                          ?>
                      <div class="form-group">
                      <label for="exampleInputCity1">Nama Anggota</label>
                      <input type="hide" class="form-control" id="exampleInputCity1" placeholder="No Faktur" style="display: none;" name="id" value="<?php echo $d['id_pinjaman'] ?>">
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Anggota" name="nama_anggota" value="<?php echo $d['nama_anggota'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">No. Anggota</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="No. Anggota" name="no_anggota" readonly="" value="<?php echo $d['id_anggota'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Jumlah Simpanan</label>
                      <input type="number" class="form-control" id="exampleInputCity1" placeholder="Jumlah Simpanan" name="jmlah_simpanan" value="<?php echo $d['jumlah_simpanan'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Sisa</label>
                      <input type="number" class="form-control" id="exampleInputCity1" name="sisa" placeholder="Cicilan Per Bulan" value="<?php echo $d['sisa'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Keperluan</label>
                      <textarea name="keperluan" class="form-control" id="exampleInputCity1" placeholder="Keperluan"><?php echo $d['keperluan'] ?></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" name="" value="Simpan">
                    <a href=" " class="btn btn-danger">Batal</a>
                    </form>
                  <?php } ?>
                    </div>
                  </div>