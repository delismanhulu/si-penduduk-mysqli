<?php
include'header.php';
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="lahir_tampil.php">Tampil | </a> Tambah Penduduk Lahir</h3>
            </div>

            <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Bayi Lahir</label>
                  <div class="col-sm-10">
                            <select name="cbpenduduk" class="form-control">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_warga where jenis='Lahir'"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['nama']; ?>
                                      </option>
                                    <?php } ?>
                            </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtalamat" name="txttgllahir" placeholder="Tgl Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Berat Lahir </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtbeatlahir" placeholder="Berat Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Panjang Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtpanjang" placeholder="Panjang Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu Bayi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtnamaibu" placeholder="Nama Ibu Bayi"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah Bayi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtnamaayah" placeholder="Nama Ayah Bayi"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Saksi Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtsaksi" placeholder="Saksi Lahir"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              <div class="box-footer">
                  <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan"> 
              </div>
              </form>

      <?php
          if (isset($_POST["btnsimpan"])){
           $cbpenduduk = $_POST['cbpenduduk'];
           $txttgllahir = $_POST['txttgllahir'];
           $txtbeatlahir = $_POST['txtbeatlahir'];
           $txtpanjang = $_POST['txtpanjang'];
           $txtnamaibu = $_POST['txtnamaibu'];
           $txtnamaayah = $_POST['txtnamaayah'];
           $txtsaksi = $_POST['txtsaksi'];
            $cek_user = mysqli_num_rows(mysqli_query($konek,"select * from tbl_lahir where kd_warga = '$cbpenduduk'"));
            if ($cek_user > 0) {
              echo "<h4>Nama Penduduk Sudah Ada</h4>";
            }else {

            $simpan = mysqli_query($konek,"INSERT INTO tbl_lahir (kd_warga,tgl_lahir,berat_lahir,panjang_lahir,nama_ibu,nama_ayah,saksi) VALUES ('$cbpenduduk','$txttgllahir','$txtbeatlahir','$txtpanjang','$txtnamaibu','$txtnamaayah','$txtsaksi')");
            if ($simpan){
              ?>
              <script type="text/javascript">
                alert('Data Berhasil di Simpan');
                document.location.href="lahir_tampil.php";
              </script>
              <?php
            }else{
              echo "Gagal Untuk Menyimpan";
            }
        }
      } // }Akhir data double cek
        ?>
        </div>
    </div>
 </section>
  </div>
<?php
include'footer.php';
?>