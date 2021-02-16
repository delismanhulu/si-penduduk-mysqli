<?php include'header.php';
$setvalidlayanancodingMjIyM = base64_decode($_GET["setvalidlayanancodingMjIyM"]);
$sqlku = mysqli_query($konek,"SELECT * FROM v_penduduk WHERE kode='$setvalidlayanancodingMjIyM'");
$data  = mysqli_fetch_array($sqlku);
?>



    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="gambar/user.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama'] ?></h3>

              <p class="text-muted text-center"><?php echo $data['nik'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b><?php echo $data['jenis_kelamin'] ?></b> <a class="pull-right">Jenis Kelamin</a>
                </li>
                <li class="list-group-item">
                  <b><?php echo $data['status_kawin'] ?></b> <a class="pull-right">Keluarga</a>
                </li>
                <li class="list-group-item">
                  <b><?php echo $data['jenis'] ?></b> <a class="pull-right">Status</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block" onClick="window.print();"><b>CETAK</b></a>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">BIODATA</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['nik'] ?></h4>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">NAMA</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['nama'] ?></h4>
                    </div>
                  </div>


                      <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['agama'] ?></h4>
                    </div>
                  </div>
                  


                      <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['pekerjaan'] ?></h4>
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['pendidikan'] ?></h4>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Tempat / TGL Lahir</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['tempat_lahir'] ?>, <?php echo $data['tgl_lahir'] ?></h4>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['alamat'] ?></h4>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Lurah / Desa</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['lurah'] ?></h4>
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['kecamatan'] ?></h4>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Kabupaten</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['kabupaten'] ?></h4>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['provinsi'] ?></h4>
                    </div>
                  </div>


                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Negara</label>
                    <div class="col-sm-10">
                     	 <h4>: <?php echo $data['negara'] ?></h4>
                    </div>
                  </div>

                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  </div>
<?php include'footer.php'; ?>