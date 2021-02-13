<?php
//Untuk export data ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-cicilan.xls");
?>
<table class="table table-bordered" id="dataTabel" border="1">
                      <thead>
                        <tr>
                          <th>
                            No.
                          </th>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            Pokok
                          </th>
                          <th>
                            Wajib
                          </th>
                          <th>
                            Sukarela
                          </th>
                          <th>
                            Jumlah
                          </th>
                          <th>
                            Jasa 1 %
                          </th>
                          <th>
                          	No
                          </th>
                          <th>
                          	Sisa
                          </th>
                          <th>
                          	Jumlah Simpanan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          include 'config/database.php'; 
                          $anggota = new database();
                          $no = 1;   
                      ?>
                    <?php foreach ($anggota->tampil_pinjaman($_GET['id_anggota']) as $d) { ?>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $d['tgl_meminjam']; ?></td>
                    <?php foreach ($anggota->tampil_data_simpanan($_GET['id_anggota']) as $d) { ?>
                          <td><?php echo $d['simpanan_pokok']; ?></td>
                          <td><?php echo $d['simpanan_wajib']; ?></td>
                          <td><?php echo $d['simpanan_sukarela']; ?></td>
                          <td><?php echo $d['jumlah']; ?></td>
                       <?php
                        $jml = $d['jumlah'];
                        $jasa = ($jml * 1) / 100;
                        echo "<td>".$jasa."</td>";
                          ?>
                    <?php $nomor = 1; ?>
                      <?php foreach ($anggota->tampil_pinjaman($_GET['id_anggota']) as $d) { ?>
                          <td><?php echo $nomor++ ?></td>
                          <td><?php echo $d['sisa']; ?></td>
                          <td><?php echo $d['jumlah_simpanan']; ?></td>
                    <?php  } ?>
                    <?php } ?>
                       <?php } ?>
                        </tr>
                      </tbody>
                    </table>