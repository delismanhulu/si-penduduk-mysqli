<?php
include'header.php';
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="datang_tampil.php">Tampil | </a> Tambah Penduduk Datang</h3>
            </div>

            <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Penduduk</label>
                  <div class="col-sm-10">
                             <select name="cbpenduduk" class="form-control">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_warga where jenis='Pendatang'"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['nama']; ?>
                                      </option>
                                    <?php } ?>
                            </select>
                  </div>
                </div>
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Datang</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtalamat" name="txttanggal" placeholder="Tgl Kematian"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Asal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtalamat" placeholder="Alamat Asal"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan Asal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtkecamatan" placeholder="Kecamatan Asal"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Lurah / Desa Asal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtlurah" placeholder="Lurah Asal"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              <div class="box-footer">
                  <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan"> 
              </div>
              </form>

      <?php
          if (isset($_POST["btnsimpan"])){
            $cbpenduduk =$_POST['cbpenduduk'];
            $txttanggal =$_POST['txttanggal'];
            $txtlurah=$_POST['txtlurah'];
            $txtalamat=$_POST['txtalamat'];
            $txtkecamatan=$_POST['txtkecamatan'];
            $cek_user = mysqli_num_rows(mysqli_query($konek,"select * from tbl_pendatang where kd_warga = '$cbpenduduk'"));
            if ($cek_user > 0) {
              echo "<h4>Nama Penduduk Sudah Ada</h4>";
            }else {

            $simpan = mysqli_query($konek,"INSERT INTO tbl_pendatang (kd_warga,desa_asal,kecamatan_asal,alamat_asal,tgl_datang) VALUES ('$cbpenduduk','$txtlurah','$txtkecamatan','$txtalamat','$txttanggal')");
            if ($simpan){
              ?>
              <script type="text/javascript">
                alert('Data Berhasil di Simpan');
                document.location.href="datang_tampil.php";
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