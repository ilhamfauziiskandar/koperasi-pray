
                  <h4>Belum Lunas</h4>
                  <hr />
                  <div class="table-responsive">
                    <table class="table table-hover" id="dataTabel">
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
                            Pokok Pinjaman
                          </th>
                          <th>
                            Sisa
                          </th>
                          <th>
                            Bulan
                          </th>
                          <th>
                            Keperluan
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
                          $belum_lunas = $anggota->belum_lunas();
                            while ($d = mysql_fetch_array($belum_lunas)) {
                              $ambil = $d;
                          ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $ambil['tgl_meminjam'] ?></td>
                          <td><?= $ambil['nama_anggota']; ?></td>
                          <td><?= $ambil['meminjam']; ?></td>
                          <td><?= $ambil['sisa']; ?></td>
                          <td><?= $ambil['bulan']; ?></td>
                          <td><?= $ambil['keperluan']; ?></td>
                          <td>
                              <a href="index.php?pages=cicilan&id_pinjaman=<?= $ambil['id_pinjaman'] ?>" class="btn btn-success ">Cicil</a>
                          </td>
                        </tr>
                          <?php 
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
                  <hr />