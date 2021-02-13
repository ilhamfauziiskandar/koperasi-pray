                  <h2>Data Pinjaman</h2>
                  <hr />
                  <?php 
                    $id = $_GET['id_anggota'];
                   ?>
                  <a href="index.php?pages=tambah_pinjaman&id_anggota=<?php echo $id ?>">
                  <button class="btn btn-primary">Input</button>
                  </a>
                  <br>  
                  <br>  
                  <div class="table-responsive">
                    <table class="table table-hover" id="example1">
                      <thead>
                        <tr>
                          <th>
                            No.
                          </th>
                          <th>
                            Tanggal Meminjam
                          </th>
                          <th>
                            Nama Anggota
                          </th>
                          <th>
                            Jumlah Simpanan
                          </th>
                            <th>
                            Meminjam
                          </th>
                          <th>
                            Sisa P
                          </th>
                          <th>
                            Bulan
                          </th>
                          <th>
                            Keperluan
                          </th>
                            <th>
                            Status
                          </th>
                          <th>
                            Opsi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $no = 1;
                          
                          foreach($db->tampil_data_pinjaman($id) as $ambil){  
                          ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $ambil['tgl_meminjam'] ?></td>
                          <td><?php echo $ambil['nama_anggota']; ?></td>
                          <td>Rp. <?php echo number_format($ambil['jumlah'], 0, ".","."); ?></td>
                          <td>Rp. <?php echo number_format($ambil['meminjam'], 0, ".","."); ?></td>
                          <td>Rp. <?php echo number_format($ambil['sisa'], 0, ".","."); ?></td>
                          <td><?php echo $ambil['bulan'] ?></td>
                          <td><?php echo $ambil['keperlluan']; ?></td>
                          <td><?php if ($ambil['status'] == 0) {
                                      echo "Lunas";
                                    }elseif($ambil['status'] == 1){
                                      echo "Belum Lunas";
                                    }else{
                                      
                                    } ?>
                          </td>
                          <td> 
                              <a href="index.php?pages=cicilan&id_pinjaman=<?php echo $ambil['id_pinjaman'] ?>" class="btn btn-success " >Cicil</a>
                          </td>
                        </tr>
                          <?php 
                          }
                          ?>
                        
                      </tbody>
                    </table>
                  </div>