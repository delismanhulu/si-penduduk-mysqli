<?php
include'header.php';
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_user WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit User</h3>
            </div>

            <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">User Name *</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['user_name'] ?>" name="txtuser" placeholder="User Name" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="Password" class="form-control" value="<?php echo $data['password'] ?>" name="txtpassword" placeholder = "Password" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
          </div>
              <div class="box-footer">
               <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Edit">
              </div>
              </form>
        <?php

          if (isset($_POST["btnedit"])){
            $txtuser =$_POST['txtuser'];
            $txtpassword =$_POST['txtpassword'];
            $edit = mysqli_query($konek,"UPDATE  tbl_user SET user_name='$txtuser',password='$txtpassword' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="user_add.php";
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