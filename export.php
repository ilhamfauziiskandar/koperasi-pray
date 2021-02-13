<?php
//Untuk export data ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-cicilan.xls");
?>
                          <?php
                          include 'config/database.php'; 
                          $anggota = new database();
                          $no = 1;   
                      ?>
<?php foreach ($anggota->tampil_anggota($_GET['id_anggota']) as $d) { ?>
<p>
  <b>Tanggal Menjadi Anggota : </b> <?php echo $d['tgl_masuk'] ?> 
</p>
<p>
  <b>Nama Anggota : </b> <?php echo $d['nama_anggota'] ?>
  <b>No : </b> <?php echo $d['id_anggota'] ?>
</p>
<?php } ?>
<table class="table table-bordered" id="dataTabel" border="1">
                      <thead>
                        <tr>
                          <th rowspan="2">
                            Tanggal
                          </th>
                          <th colspan="3">
                            SIMPANAN
                          </th>
                          <th rowspan="2">
                            JUMLAH
                          </th>
                        </tr>
                        <tr>
                          <th>
                            Pokok
                          </th>
                          <th>
                            Wajib
                          </th>
                          <th>
                            Sukarela +/-
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php foreach ($anggota->tampil_data_simpanan($_GET['id_anggota']) as $d) { ?>
                         <tr>
                          <td><?php echo $d['tgl_menyimpan'] ?></td>
                          <td><?php echo $d['simpanan_pokok']; ?></td>
                          <td><?php echo $d['simpanan_wajib']; ?></td>
                          <td><?php echo $d['simpanan_sukarela']; ?></td>
                          <td><?php echo $d['jumlah']; ?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                      <br>
                      <br>
                    </table>
<table class="table table-bordered" id="dataTabel" border="1">
                      <thead>
                        <tr>
                          <th rowspan="2">
                            Tanggal
                          </th>
                          <th colspan="3">
                            PINJAMAN
                          </th>
                        </tr>
                        <tr>
                          <th>
                            Pokok / Sisa
                          </th>
                          <th>
                            Jasa
                          </th>
                          <th>
                            Jumlah
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php foreach ($anggota->tampil_cicil($_GET['id_anggota']) as $d) { ?>
                         <tr>
                          <td><?php echo $d['tgl_nyicil'] ?></td>
                          <td><?php echo $d['sisa']; ?></td>
                          <td><?php echo $d['jasa']; ?></td>
                          <td><?php echo $d['jumlah']; ?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>