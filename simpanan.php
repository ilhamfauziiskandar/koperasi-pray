  <h2>Data Simpanan</h2>
                  <?php 
                  $id = $_GET['id_anggota'];
                   ?>
                  <a href="index.php?pages=tambah_simpanan&id_anggota=<?php echo $id ?>">
                  <button class="btn btn-primary">Input</button>
                  </a>
                  <a href="index.php?pages=lap_simpan&id_anggota=<?php echo $id ?>" class="btn btn-success ">Buat Laporan</a>
                  <br>  
                  <br>  
                  <div class="table-responsive">
                    <table class="table table-hover" >
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Tanggal Menyimpan</th>
                          <th>Nama Anggota</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $simpanan = new database();
                          $no = 1;
                          
                          foreach($simpanan->tampil_data_simpanan($id) as $ambil){ 
                                  $jumlah[] = $ambil['jumlah'];
                                  $total = array_sum($jumlah); 
                          ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $ambil['tgl_menyimpan'] ?></td>
                          <td><?php echo $ambil['nama_anggota'] ?></td>
                          <td>Rp. <?php echo number_format($ambil['jumlah'], 0, ".","."); ?></td>
                        </tr>
                          <?php } ?>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>Total :</td>
                          <td>Rp. <?php echo number_format($total, 0, ".",".");  ?></td>    
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
              
            