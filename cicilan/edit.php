<?php
error_reporting(0);
include '../config/database.php';
$db = new database();
?>
                  <div class="card">
                    <div class="card-body">
                      <h2>Form Edit Cicilan</h2>
                      <p class="card-description">
                        Silahkan isi form untuk edit data!
                      </p>
                      <form method="post" action="proses.php?aksi=edit_cicilan">  
                        <?php
                          // Mengambil data berdasarkan ID
                            foreach($db->edit_cicilan($_GET['id_cicilan']) as $d){
                          ?>
                      <input type="hide" class="form-control" id="exampleInputCity1" placeholder="No Faktur" style="display: none;" name="id" value="<?php echo $d['id_cicilan'] ?>">
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Transaksi</label>
                      <input type="date" class="form-control" id="exampleInputCity1" name="tanggal_transaksi" placeholder="No. Telepon" value="<?php $d['tanggal_transaksi'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Batas Bayar</label>
                      <input type="date" name="tanggal_batas_bayar" class="form-control" id="exampleInputCity1" placeholder="Denda" value="<?php echo $d['tanggal_batas_bayar'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Saldo Cicilan</label>
                      <input type="text" name="saldo" class="form-control" id="exampleInputCity1" value="<?php echo $d['saldo_cicilan'] ?>" placeholder="Saldo Cicilan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Status Cicilan</label>
                      <input type="hidden" name="status" class="form-control" id="exampleInputCity1" placeholder="Status Cicilan" value="<?php echo $d['status_cicilan'] ?>">
                    </div>
                    <input type="submit" class="btn btn-success" name="" value="Simpan">
                    <a href=" " class="btn btn-danger">Batal</a>
                    </form>
                  <?php } ?>
                    </div>
                  </div>