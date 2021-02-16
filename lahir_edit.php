<?php
include'header.php';
$setvalidlayanancodingMjIyM = base64_decode($_GET["setvalidlayanancodingMjIyM"]);
$sqlku = mysqli_query($konek,"SELECT * FROM v_lahir WHERE kode='$setvalidlayanancodingMjIyM'");
$data  = mysqli_fetch_array($sqlku);
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="lahir_add.php">Tambah</a> | <a href="lahir_tampil.php">Lihat Data | </a> Edit Data Lahir</h3>
            </div>

            <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" placeholder="Nama" disabled>
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtalamat" name="txttgllahir" value="<?php echo $data['tgl_lahir'] ?>" placeholder="Tgl Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Berat Lahir </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtbeatlahir" value="<?php echo $data['berat_lahir'] ?>" placeholder="Berat Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Panjang Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtpanjang" value="<?php echo $data['panjang_lahir'] ?>" placeholder="Panjang Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu Bayi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtnamaibu" value="<?php echo $data['nama_ibu'] ?>" placeholder="Nama Ibu Bayi"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah Bayi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtnamaayah" value="<?php echo $data['nama_ayah'] ?>" placeholder="Nama Ayah Bayi"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Saksi Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtsaksi" value="<?php echo $data['saksi'] ?>" placeholder="Saksi Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              <div class="box-footer">
                  <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Simpan"> 
              </div>
              </form>


        <?php

          if (isset($_POST["btnedit"])){

           $cbpenduduk = $_POST['cbpenduduk'];
           $txttgllahir = $_POST['txttgllahir'];
           $txtbeatlahir = $_POST['txtbeatlahir'];
           $txtpanjang = $_POST['txtpanjang'];
           $txtnamaibu = $_POST['txtnamaibu'];
           $txtnamaayah = $_POST['txtnamaayah'];
           $txtsaksi = $_POST['txtsaksi'];

            $edit = mysqli_query($konek,"UPDATE  tbl_lahir SET tgl_lahir='$txttgllahir',berat_lahir='$txtbeatlahir',panjang_lahir='$txtpanjang',nama_ibu='$txtnamaibu',nama_ayah='$txtnamaayah',saksi='$txtsaksi' WHERE kode='$setvalidlayanancodingMjIyM'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                 alert('Data Berhasil di Edit');
                document.location.href="lahir_tampil.php";
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