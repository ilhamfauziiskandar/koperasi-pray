<?php
error_reporting(0);
include '../config/database.php';
$db = new database();
?>
                    <h2>Form Edit Anggota</h2>
                    <hr />
                      <form method="post" action="proses.php?aksi=edit_anggota">  
                          <?php
                          // Mengambil data berdasarkan ID
                            foreach($db->edit_anggota($_GET['id_anggota']) as $d){
                          ?>
                      <div class="form-group">
                      <label for="exampleInputCity1">Nama Anggota</label>
                      <input type="hide" class="form-control" id="exampleInputCity1" placeholder="No Faktur" style="display: none;" name="id" value="<?php echo $d['id_anggota'] ?>">
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Anggota" name="nama_anggota" value="<?php echo $d['nama_anggota'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tempat Lahir</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Tempat Lahir" name="tempat" value="<?php echo $d['tempat'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="exampleInputCity1" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $d['tgl_lahir'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="4"><?php echo $d['alamat'] ?></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" name="" value="Simpan">
                    <a href=" " class="btn btn-danger">Batal</a>
                    </form>
                  <hr />    
                  <?php } ?>