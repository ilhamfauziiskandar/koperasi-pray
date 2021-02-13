<?php
error_reporting(0);
include '../config/database.php';
$db = new database();
?>
                   <h2>Form Input Cicilan</h2>
                   <hr />
                      <?php
                            foreach($db->tampil_minjam($_GET['id_pinjaman']) as $d){
                              //var_dump($d);
                      ?>  
                      <form method="post" action="proses.php?aksi=tambah_cicilan">
                      <div class="form-group">
                      <input type="hidden" name="id_anggota" value="<?php echo $d['id_anggota']; ?>">
                      <input type="hidden" name="id_pinjaman" value="<?php echo $d['id_pinjaman'] ?>">
                      <?php 
                      $tgl = date('Y-m-d')
                       ?>
                      <label for="exampleInputCity1">Tanggal Transaksi</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Anggota" name="tgl_transaksi" value="<?php echo $tgl ?>" readonly="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Pokok Pinjaman : </label>
                      <?php 
                      $sisa = $d['sisa'];
                      $pinjam = $d['meminjam'];
                      $bulan = $d['bulan'];
                      $jasa = ($pinjam * 0.015);
                      $angsuran = ($pinjam / $bulan);
                      $hasilsisa = $sisa - $angsuran; 
                      $hasil = $angsuran + $jasa;
                      $total = $pinjam - $angsuran;
                      // $total_nyicil = $total * $bulan;
                      
                       ?>
                      <input type="number" name="pokok_pinjaman" class="form-control" id="exampleInputCity1" readonly="" value="<?php echo $pinjam ?>">
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputCity1">Sisa Pinjaman</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="sisa" placeholder="No. Faktur" value="<?php echo $hasilsisa ?>" readonly>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Angsuran Pokok</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="angsuran_pokok" placeholder="No. Faktur" value="<?php echo $angsuran ?>" readonly>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Jasa Pinjaman</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="jasa" placeholder="No. Faktur" value="<?php echo $jasa ?>" readonly>
                    </div>
                                        
                    <div class="form-group">
                      <label for="exampleInputCity1">Jumlah Angsuran Cicilan (Pokok + Jasa)</label>
                      <input type="number" name="cicilan" class="form-control" id="exampleInputCity1" readonly="" value="<?php echo $hasil ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Angsuran Ke</label>
                      <select type="text" class="form-control" id="exampleInputCity1" name="bulan">
                        <?php 
                            foreach($db->tampil_atu_cicilan($_GET['id_pinjaman']) as $k){
                            $jk= $k['bulan'] + 1;
                            }
                            for ($i=$bulan; $jk <= $i; $jk++) { ?>
                         <option><?php echo $jk;?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <?php } ?> 
                    <input type="submit" class="btn btn-success" name="" value="Simpan">
                    <a href=" " class="btn btn-danger">Batal</a>
                    </form>
                   <hr />
