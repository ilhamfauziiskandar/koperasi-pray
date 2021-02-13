<?php
error_reporting(0);
include '../config/database.php';
$db = new database();
?>
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Form Input Pinjaman</h2>
                      <p class="card-description">
                        Silahkan isi form untuk menginput data!
                      </p>
                      <form method="post" action="proses.php?aksi=nabung">  
                      <?php
                            foreach($db->edit_anggota($_GET['id_anggota']) as $d){
                      ?> 
                      <div class="form-group">
                      <label for="exampleInputCity1">Jumlah Nabung</label>
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="exampleInputCity1" placeholder="No. Anggota" name="id_anggota" readonly="" value="<?php echo $d['id_anggota'] ?>">
                    </div>
                      <input type="hidden" class="form-control" id="exampleInputCity1"  name="jumlah" value="<?php echo $d['jumlah'] ?>">    
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Jumlah Nabung" name="nabung">
                    </div>
                          
                  <?php } ?>
                    <input type="submit" class="btn btn-success" name="" value="Simpan">
                    <a href="index.php?pages=anggota" class="btn btn-danger">Batal</a>
                    </form>
                    </div>
                  </div>