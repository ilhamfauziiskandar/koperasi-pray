  <h2>Form Input Anggota</h2>
                      <p class="card-description">
                        Silahkan isi form untuk menginput data!
                      </p>
                      <form method="post" action="proses.php?aksi=tambah_anggota">  
                    <?php $tanggal = date('Y-m-d'); ?>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Masuk</label>
                      <input type="date" class="form-control" id="exampleInputCity1" name="tgl_masuk" placeholder="Tanggal Mask" value="<?php echo $tanggal ?>" readonly="">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputCity1">Nama Anggota</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Anggota" name="nama_anggota">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tempat Lahir</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Tempat Lahir" name="tempat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="exampleInputCity1" placeholder="Tanggal Lahir" name="tgl_lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Pekerjaan</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Pekerjaan" name="pekerjaan" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="4"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" name="" value="Simpan">
                    <a href="index.php?pages=anggota" class="btn btn-danger">Batal</a>
                    </form>