<div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
    <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Reset Password</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php foreach ($edit as $e) { ?> <!-- $edit berasal dari controller function edit ['edit'] -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Admin/updatepass" method="POST">
            <input type="hidden" name="idadmin" value="<?php echo $e->id_admin ?>" required>
              <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nama Administrator</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="namaadmin" placeholder="Nama Administrator" disabled value="<?php echo $e->nama_admin?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Username</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Username" name="username" disabled value="<?php echo $e->username?>" required>
                      </div>
                  </div>

<!--                   <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" disabled value="<?php echo $e->password?>" required>
                      </div>
                  </div> -->  

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Password Baru</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword3" name="passwordbaru" placeholder="Password Baru" required>
                      </div>
                  </div>  

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="<?php echo base_url();?>index.php/pengaturan/Admin/index">
                    <button type="button" class="btn btn-default">Cancel</button>
                  </a>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
        </form>
        <?php } ?>
    </div>
  </div>