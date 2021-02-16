<?php
include'header.php';
$setvalidlayanancodingMjIyM = base64_decode($_GET["setvalidlayanancodingMjIyM"]);
$sqlku = mysqli_query($konek,"SELECT * FROM v_kematian WHERE kode='$setvalidlayanancodingMjIyM'");
$data  = mysqli_fetch_array($sqlku);
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="meninggal_add.php">Tambah</a> | <a href="meninggal_tampil.php">Lihat Data | </a> Edit Data Meninggal</h3>
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
                  <label for="inputEmail3" class="col-sm-2 control-label">NAMA</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" placeholder="Nama" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Kematian</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtalamat" name="txttanggal" value="<?php echo $data['tgl_kematian'] ?>" placeholder="Tgl Kematian"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tempat Kematian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txttempat" value="<?php echo $data['tempat'] ?>" placeholder="Tempat Kematian"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Penyebab Kematian</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtpenyebab"><?php echo $data['penyebab_kematian'] ?></textarea>
                  </div>
                </div>
              </div>
              <div class="box-footer">
               <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Edit">
              </div>
              </form>

        <?php

          if (isset($_POST["btnsimpan"])){
            $txttanggal =$_POST['txttanggal'];
            $txttempat =$_POST['txttempat'];
            $txtpenyebab=$_POST['txtpenyebab'];

            $edit = mysqli_query($konek,"UPDATE  tbl_kematian SET tgl_kematian='$txttanggal',tempat='$txttempat',penyebab_kematian='$txtpenyebab' WHERE kode='$setvalidlayanancodingMjIyM'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                 alert('Data Berhasil di Edit');
                document.location.href="meninggal_tampil.php";
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