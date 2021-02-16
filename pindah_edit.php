<?php
include'header.php';
$setvalidlayanancodingMjIyM = base64_decode($_GET["setvalidlayanancodingMjIyM"]);
$sqlku = mysqli_query($konek,"SELECT * FROM v_pindah WHERE kode='$setvalidlayanancodingMjIyM'");
$data  = mysqli_fetch_array($sqlku);
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="pindah_add.php">Tambah</a> | <a href="pindah_tampil.php">Lihat Data | </a> Edit Data Pindah</h3>
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Pindah</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtalamat" value="<?php echo $data['tgl_pindah'] ?>" name="txttanggal" placeholder="Tgl Kematian"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Pindah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtalamat" value="<?php echo $data['alamat_pindah'] ?>" placeholder="Alamat Pindah"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtkecamatan" value="<?php echo $data['kecamatan'] ?>"placeholder="Kecamatan Pindah"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Lurah / Desa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtlurah" placeholder="Lurah Pindah" value="<?php echo $data['lurah'] ?> "  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alasan Pindah</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtalasan"><?php echo $data['alasan_pindah'] ?> </textarea>
                  </div>
                </div>
              </div>


              <div class="box-footer">
               <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Edit">
              </div>
              </form>

        <?php

          if (isset($_POST["btnsimpan"])){
             $cbpenduduk =$_POST['cbpenduduk'];
            $txttanggal =$_POST['txttanggal'];
            $txtalasan=$_POST['txtalasan'];
            $txtlurah=$_POST['txtlurah'];
            $txtalamat=$_POST['txtalamat'];
            $txtkecamatan=$_POST['txtkecamatan'];

            $edit = mysqli_query($konek,"UPDATE  tbl_pindah SET alasan_pindah='$txtalasan',alamat_pindah='$txtalamat',kecamatan='$txtkecamatan',lurah='$txtlurah',tgl_pindah='$txttanggal' WHERE kode='$setvalidlayanancodingMjIyM'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                 alert('Data Berhasil di Edit');
                document.location.href="pindah_tampil.php";
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