
                  <h2>Data Cicilan</h2>
                  <?php 
                  $id = $_GET['id_pinjaman'];
                  ?>
                  <a href="index.php?pages=tambah_cicilan&id_pinjaman=<?php echo $id ?>">
                  <button class="btn btn-primary" >Input</button>
                  </a>
                  <a href="proses.php?aksi=update_sisa&id_pinjaman=<?php echo $id ?>">
                    <button class="btn btn-warning" >Refresh</button>
                  </a>
                  <hr />
                  <div class="table-responsive">
                    <table class="table table-hover" id="example1">
                      <thead>
                        <tr>
                          <th>
                            No.
                          </th>
                          <th>
                            Tanggal Transaksi
                          </th>
                          <th>
                            Pokok
                          </th>
                          <th>
                            Sisa
                          </th>
                          <th>
                            Angsuran
                          </th>
                          <th>
                            Jasa
                          </th>
                          <th>
                            Angsuran Ke
                          </th>
                          <th>
                            Jumlah Angsuran
                          </th>
                          <th>
                            Opsi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $anggota = new database();
                          $no = 1;
                          foreach($anggota->tampil_data_cicilan($id) as $ambil){
                          ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $ambil['tgl_nyicil']; ?></td>
                          <td>Rp. <?php echo number_format($ambil['pokok_pinjaman'], 0, ".","."); ?></td>
                          <td>Rp. <?php echo number_format($ambil['sisa'], 0, ".","."); ?></td>
                          <td>Rp. <?php echo number_format($angsuran = $ambil['cicilan'] - $ambil['jasa'], 0, ".",".") ; ?></td>
                          <td>Rp. <?php echo number_format($ambil['jasa'], 0, ".","."); ?></td>
                          <td><?php echo $ambil['bulan']; ?></td>
                          <td>Rp.<?php echo number_format($ambil['jumlah'], 0, ".","."); ?></td>
                          <?php if ($ambil['sisa'] == 0){?>
                                <td>
                                  <a href="proses.php?aksi=update_status&id_pinjaman=<?php echo$ambil['id_pinjaman'] ?>&&id_anggota=<?php echo$ambil['id_anggota'] ?> " class="btn btn-primary">Update Status</a>
                                  <a href="cetak_cicilan.php?aksi=cetak_cicilan&id_cicilan=<?php echo$ambil['id_cicilan']?>&&id_pinjaman=<?php echo$ambil['id_pinjaman']?>" class="btn btn-warning " target="_blank"><i class="menu-icon mdi mdi-printer"></i>Cetak</a>
                                </td>
                          <?php }else{?>
                            <td>
                              <a href="" class="btn btn-primary" disabled>Update Status</a>
                              <a href="cetak_cicilan.php?aksi=cetak_cicilan&id_cicilan=<?php echo$ambil['id_cicilan']?>&&id_pinjaman=<?php echo$ambil['id_pinjaman']?>" class="btn btn-warning " target="_blank"><i class="menu-icon mdi mdi-printer"></i>Cetak</a>
                            </td>
                          <?php } ?>
                        </tr>
                          <?php 
                          }
                          ?>
                      </tbody>
                    </table>
                    <hr />