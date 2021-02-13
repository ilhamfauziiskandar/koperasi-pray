
                  <h2>Data Simpanan</h2>
                  <hr />
                  <div class="table-responsive mt-3">
                    <table class="table table-hover" id="example1">
                      <thead>
                        <tr>
                          <th>
                            No.
                          </th>
                          <th>
                            Tanggal Masuk
                          </th>
                          <th>
                            Nama Anggota
                          </th>
                          <th>
                            Tempat, Tanggal Lahir
                          </th>
                          <th>
                            Pekerjaan
                          </th>
                          <th>
                            Alamat
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
                          foreach($anggota->tampil_data() as $ambil){  
                          ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $ambil['tgl_masuk'] ?></td>
                          <td><?php echo $ambil['nama_anggota']; ?></td>
                          <td><?php echo $ambil['tempat'].",".$ambil['tgl_lahir']; ?></td>
                          <td><?php echo $ambil['pekerjaan']; ?></td>
                          <td><?php echo $ambil['alamat']; ?></td>
                          <td>
                              <a href="index.php?pages=simpanan&id_anggota=<?php echo $ambil['id_anggota'] ?>" class="btn btn-primary ">
                              Simpanan</a>
                          </td>
                        </tr>
                          <?php 
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
                  <hr />
