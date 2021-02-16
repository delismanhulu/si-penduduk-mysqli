<?php
include'header.php';
?>

    <section class="content">
      <div class="row">


        <?php
            $regis1 = mysqli_query($konek,"SELECT * FROM tbl_pindah");
            $registrasi =mysqli_num_rows($regis1);
          ?>



        <?php
            $data1 = mysqli_query($konek,"SELECT * FROM tbl_kematian");
            $meninggal =mysqli_num_rows($data1);
          ?>

        <?php
          $data2 = mysqli_query($konek,"SELECT * FROM tbl_pendatang");
          $pendatang = mysqli_num_rows($data2);
        ?>


        <?php
          $data3 = mysqli_query($konek,"SELECT * FROM tbl_lahir");
          $lahir = mysqli_num_rows($data3);
        ?>

         <?php
            $data4 = mysqli_query($konek,"SELECT * FROM v_tetap");
            $tetap =mysqli_num_rows($data4);
          ?>

        <?php
            $data5 = mysqli_query($konek,"SELECT * FROM tbl_warga");
            $warga =mysqli_num_rows($data5);
          ?>

        <?php
          $data6 = mysqli_query($konek,"SELECT * FROM tbl_user");
          $user = mysqli_num_rows($data6);
        ?>


        <?php
          $data7 = mysqli_query($konek,"SELECT * FROM tbl_lurah");
          $lurah = mysqli_num_rows($data7);
        ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $registrasi; ?></h3>
              <p>Penduduk Pindah</p>
            </div>
            <div class="icon">
                 <i class="ion ion-person-add"></i>
            </div>
            <a href="pindah_tampil.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $meninggal; ?> <sup style="font-size: 20px"></sup></h3>
              <p>Penduduk Meninggal</p>
            </div>
            <div class="icon">
                  <i class="ion ion-person-add"></i>
            </div>
            <a href="meninggal_tampil.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $pendatang; ?></h3>
              <p>Penduduk Pendatang </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="datang_tampil.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $lahir; ?></h3>

              <p>Penduduk Lahir</p>
            </div>
            <div class="icon">
                  <i class="ion ion-person-add"></i>
            </div>
            <a href="lahir_tampil.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>





      <div class="row">




        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $tetap; ?></h3>
              <p>Penduduk Tetap</p>
            </div>
            <div class="icon">
                 <i class="ion ion-person-add"></i>
            </div>
            <a href="tetap_add.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $warga; ?> <sup style="font-size: 20px"></sup></h3>
              <p>Total Penduduk</p>
            </div>
            <div class="icon">
                  <i class="ion ion-person-add"></i>
            </div>
            <a href="penduduk_tampil.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $user; ?></h3>
              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="user_add.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $lurah; ?></h3>
              <p>Total Lurah / Desa</p>
            </div>
            <div class="icon">
                  <i class="ion ion-person-add"></i>
            </div>
            <a href="lurah_add.php" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      
    </section>
  </div>
<?php
include'footer.php';
?>