  <?php   
    include_once('config/database.php');
    $db = new database(); 
    $result = $db->jumlah_anggota();
    $anggota= mysql_num_rows($result);
    $result = $db->belum_lunas();
    $belumlunas= mysql_num_rows($result);
  ?>

  <div class="row text-center">
  <div class="col-md-3"></div>
    <div class="col-md-3"> 
      <a href="index.php?pages=anggota">
        <div class="clearfix">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $anggota ; ?></h3>
              <p>Jumlah anggota</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <a href="index.php?pages=anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </a>
    </div>
    <div  class="col-md-3">
      <a href="index.php?pages=belum_lunas">
        <div class="clearfix">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $belumlunas ; ?></h3>
              <p>Belum lunas</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie"></i>
            </div>
            <a href="index.php?pages=belum_lunas" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3"></div>
  </div>
  <div class="card">
    <div class="card-body">
      <img class="img-fluid pad"  src="img/koperasi.jpg"></img>
    </div>
  </div>