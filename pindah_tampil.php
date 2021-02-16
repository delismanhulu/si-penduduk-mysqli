<?php include'header.php';
error_reporting(0);
 ?>
 

      <br>
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
            <form action="" method="POST">
             <div class="form-group">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="query" placeholder="Cari NIK & Nama" required oninvalid="this.setCustomValidity('Input Pencarian Anda NIK atau Nama Penduduk')" oninput="setCustomValidity('')" />
                  </div>

                  <div class="col-sm-2">
                    <input type="submit" name="cari" class="btn btn-primary pull-right" value="Cari">

                  </div>
                </div>
                </form>
            </div>

            </div>
        </div>


 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> <a href="pindah_add.php">Tambah</a> | Data Penduduk Penduduk</h3>
            </div>
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th width="5%">NO</th>
                  <th>NIK</th>
                   <th>Nama</th>
                   <th>Alasan Pindah</th>
                    <th>Alamat Pindah</th>
                     <th>Tanggal Pindah</th>
                  <th width="10%">Action</th>
                </tr>
        <?php
            $no =1;
            $query = $_POST['query'];
            if ($query !=''){
                $select = mysqli_query($konek, "SELECT * FROM v_pindah WHERE nik LIKE '%".$query."%' OR nama LIKE '%".$query."%'");
            }else {
               $select=mysqli_query($konek,"select * from v_pindah");
            }
            if(mysqli_num_rows($select)){
                while ($data=mysqli_fetch_array($select)){
        ?>

                                         <td align="left"> <?php echo $no++; ?> </td>
                                      
                                        <td align="left"> <?php echo $data['nik'];  ?></td>
                                        <td align="left"> <?php echo $data['nama'];  ?></td>
                                        <td align="left"> <?php echo $data['alasan_pindah'];  ?></td>
                                        <td align="left"> <?php echo $data['alamat_pindah'];  ?></td>
                                        <td align="left"> <?php echo $data['tgl_pindah'];  ?></td>
                                      
                                         <td><a href="pindah_edit.php?setvalidlayanancodingMjIyM=<?php echo base64_encode($data['kode']); ?>">Edit</a> | <a onClick="return confirm('Yakin Anda Menghapus ?')" href="pindah_hapus.php?setvalidlayanancodingMjIyM=<?php echo $data['kode']; ?>">Hapus</a></td>
                                        </tr>
            <?php }}else{
      echo "Try Again";}
    ?>


              </table>
        </div>
        </div>
 </section>
  </div>
<?php include'footer.php'; ?>