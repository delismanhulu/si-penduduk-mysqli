<?php
include'header.php';
$setvalidlayanancodingMjIyM = base64_decode($_GET["setvalidlayanancodingMjIyM"]);
$sqlku = mysqli_query($konek,"SELECT * FROM v_datang WHERE kode='$setvalidlayanancodingMjIyM'");
$data  = mysqli_fetch_array($sqlku);
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="datang_add.php">Tambah</a> | <a href="datang_tampil.php">Lihat Data | </a> Edit Data Pendatang</h3>
            </div>

            <form class="form-horizontal" method="POST" action="">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" value="<?php echo $data['nik'] ?>" placeholder="Nama" disabled>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" placeholder="Nama" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Datang</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtalamat" name="txttanggal" value="<?php echo $data['tgl_datang'] ?>" placeholder="Tgl Kematian"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Asal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtalamat" value="<?php echo $data['alamat_asal'] ?>" placeholder="Alamat Asal"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan Asal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtkecamatan" value="<?php echo $data['kecamatan_asal'] ?>" placeholder="Kecamatan Asal"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Lurah / Desa Asal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtlurah" placeholder="Lurah Asal" value="<?php echo $data['desa_asal'] ?>"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              <div class="box-footer">
                  <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Simpan"> 
              </div>
              </form>

        <?php

          if (isset($_POST["btnedit"])){
            $txttanggal =$_POST['txttanggal'];
            $txtlurah=$_POST['txtlurah'];
            $txtalamat=$_POST['txtalamat'];
            $txtkecamatan=$_POST['txtkecamatan'];
            $edit = mysqli_query($konek,"UPDATE  tbl_pendatang SET desa_asal='$txtlurah',kecamatan_asal='$txtkecamatan',alamat_asal='$txtalamat',tgl_datang='$txttanggal' WHERE kode='$setvalidlayanancodingMjIyM'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                 alert('Data Berhasil di Edit');
                document.location.href="datang_tampil.php";
              </script>
              <?php
            }else{
              echo "Terjadi kesalahan";
            }
          }
        ?>
        </div>
    </div>
    </section>
    </div>
<?php
include'footer.php';
?>