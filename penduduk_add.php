<?php
include'header.php';
?>
 <section class="content">
      <div class="row">
       <div class="col-md-6">
          <div class="box box-succsess">
            <div class="box-header with-border">
              <h3 class="box-title">Form Input</h3>
            </div>
              <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label>NIK *</label>
                  <input type="text" maxlength="16" class="form-control" name="txtnik" placeholder="Input NIK" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


                   <div class="form-group">
                  <label>Nama *</label>
                  <input type="text" class="form-control" name="txtnama" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>
                   <div class="form-group">
                  <label>Tempat Lahir *</label>
                  <input type="text" class="form-control" name="txttempatlahir" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


                   <div class="form-group">
                  <label>Tgl Lahir *</label>
                  <input type="date" class="form-control" id="date" name="txttanggal" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


                   <div class="form-group">
                  <label>Jenis Kelamin *</label>
                       <select name="cbjeniskelamin" class="form-control">
                 
                      <option class="form-control">Laki-Laki
                      </option>
                        <option class="form-control">Perempuan
                      </option>
                  </select>
                </div>

                  

                <div class="form-group">
                  <label>Status Kawain *</label>
                       <select name="cbstatus" class="form-control">
                 
                      <option class="form-control">Belum Menikah
                      </option>
                        <option class="form-control">Sudah Menikah
                      </option>
                       </select>
                </div>

                <div class="form-group">
                  <label>Alamat *</label>
                    <textarea class="form-control" name="txtalamat"></textarea>
                </div>
                <br> <br>
                 <div class="form-group">
                  <label>Jenis Penduduk *</label>
                  <select name="cbjenispenduduk" class="form-control">
                      <option class="form-control">Tetap</option>
                      <option class="form-control">Pendatang</option>
                      <option class="form-control">Meninggal</option>
                      <option class="form-control">Pindah</option>
                      <option class="form-control">Lahir</option>
                  </select>
                </div>


                  </div>
               



          </div>
        </div>

        <!-- Halaman KE II -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penduduk</h3>
            </div>
           
              <div class="box-body">
               


                 <div class="form-group">
                  <label>Pekerjaan *</label>
                  <select name="cbpekerjaan" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_pekerjaan"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>


                 <div class="form-group">
                  <label>Pendidikan</label>
                  <select name="cbpendidikan" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_pendidikan"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>


                <div class="form-group">
                  <label>Agama</label>
                  <select name="cbagama" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_agama"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Lurah / Desa *</label>
                  <select name="cblurah" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_lurah"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Kecamaatan *</label>
                  <input type="text" class="form-control" name="txtkecamatan" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>

                 <div class="form-group">
                  <label>Kabupaten</label>
                  <input type="text" class="form-control" name="txtkabupaten" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>

                 <div class="form-group">
                  <label>Provinsi</label>
                  <input type="text" class="form-control" name="txtprovinsi" value="Sumatera Utara" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>

                   <div class="form-group">
                  <label>Negara</label>
                  <input type="text" class="form-control" name="txtnegara" value="WNI" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


              </div>
              <div class="box-footer">
               <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
              </div>
            </form>

             <?php
          if (isset($_POST["btnsimpan"])){
                  $cblurah =$_POST['cblurah'];
                  $cbpekerjaan =$_POST['cbpekerjaan'];
                  $cbpendidikan =$_POST['cbpendidikan'];
                  $cbagama =$_POST['cbagama'];
                  $txtnik =$_POST['txtnik'];
                  $txtnama =$_POST['txtnama'];
                  $txttanggal =$_POST['txttanggal'];
                  $cbjeniskelamin =$_POST['cbjeniskelamin'];
                  $txtalamat =$_POST['txtalamat'];
                  $txtkecamatan =$_POST['txtkecamatan'];
                  $txtkabupaten =$_POST['txtkabupaten'];
                  $txtprovinsi =$_POST['txtprovinsi'];
                  $txtnegara =$_POST['txtnegara'];
                  $cbstatus =$_POST['cbstatus'];
                  $txttempatlahir =$_POST['txttempatlahir'];
                  $cbjenispenduduk = $_POST['cbjenispenduduk'];

                      $simpan = mysqli_query($konek,"INSERT INTO tbl_warga (kd_lurah,kd_pekerjaan,kd_pendidikan,kd_agama,nik,nama,tgl_lahir,jenis_kelamin,alamat,kecamatan,kabupaten,provinsi,negara,status_kawin,tempat_lahir,jenis) VALUES ('$cblurah','$cbpekerjaan','$cbpendidikan','$cbagama','$txtnik','$txtnama','$txttanggal','$cbjeniskelamin','$txtalamat','$txtkecamatan','$txtkabupaten','$txtprovinsi','$txtnegara','$cbstatus','$txttempatlahir','$cbjenispenduduk')");
                      if ($simpan){
                        ?>
                        <script type="text/javascript">
                          document.location.href="penduduk_tampil.php";
                        </script>
                        <?php
                      }else{
                        echo "Gagal Untuk Menyimpan";
                      }
                  }
                  ?>
            </div>
          </div>
    </div>
</section>
 </div>
<?php include'footer.php'; ?>


