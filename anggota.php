                  <h2>Data Anggota</h2>
                  <hr />
                  <a href="index.php?pages=tambah_anggota">
                  <button class="btn btn-primary">Tambah Data Anggota</button>
                  </a> 
                  <div class="table mt-3">
                  <table id="example1" class="table table-bordered table-hover">
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
                              <!-- <a href="export.php?id_anggota=<?php //echo $ambil['id_anggota'] ?>" class="btn btn-primary">Buat Laporan</a>
                              <a href="index.php?pages=simpanan&id_anggota=<?php //echo $ambil['id_anggota'] ?>" class="btn btn-default">Simpanan</a>
                              <a href="index.php?pages=pinjaman&id_anggota=<?php //echo $ambil['id_anggota'] ?>" class="btn btn-warning">Pinjam</a> -->
                              <a href="index.php?pages=edit_anggota&id_anggota=<?php echo $ambil['id_anggota'] ?>" class="btn btn-primary ">Edit</a>
                              <a href="proses.php?aksi=hapus_anggota&id_anggota=<?php echo $ambil['id_anggota'] ?>" class="btn btn-danger "  onclick="return confirm('Klik ok untuk menghapus data')">Hapus</a>
                          </td>
                        </tr>
                          <?php 
                          }
                          ?>
                        
                      </tbody>
                    </table>
                  <hr />
                  </div>            