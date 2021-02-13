            
            <div class="card">
                <div class="card-body">
                  <h2>Data Laporan</h2>
                  <br>  
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTabel">
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
                            <a href="export.php?id_anggota=<?php echo $ambil['id_anggota'] ?>" class="btn btn-primary btn-rounded btn-fw">Buat Laporan</a>
                          </td>
                        </tr>
                          <?php 
                          }
                          ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
