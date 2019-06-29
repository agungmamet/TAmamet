<div class="row">
  <div class="col-md-6">
          <!-- Horizontal Form -->
    <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Administrator</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php foreach ($edit as $e) { ?> <!-- $edit berasal dari controller function edit ['edit'] -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Admin/updateadmin" method="POST">
            <input type="hidden" name="idadmin" value="<?php echo $e->id_admin ?>" required>
              <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nama Administrator</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="namaadmin" placeholder="Nama Administrator" value="<?php echo $e->nama_admin?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="alamat" placeholder="Alamat" value="<?php echo $e->alamat?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">TTL</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="ttl" placeholder="Tempat Tanggal Lahir" value="<?php echo $e->ttl?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Jenis kelamin</label>
                          &nbsp;&nbsp;&nbsp;<input type="radio" name="jeniskelamin" value="0 <?php echo $e->jeniskelamin?>" required> Laki-Laki<br>
                          &nbsp;&nbsp;&nbsp;<input type="radio" name="jeniskelamin" value="1 <?php echo $e->jeniskelamin?>" required> Perempuan<br>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="<?php echo $e->email?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Telp</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="telp" placeholder="No Telepon" value="<?php echo $e->telp?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Instansi</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="instansi" placeholder="Instansi" value="<?php echo $e->instansi?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Username</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Username" name="username" value="<?php echo $e->username?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Hak Akses</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="hakakses" style="width: 333px;" required>
                          <option value="">Pilih Hak Akses</option>
                          <option value="1 <?php echo $e->hak_akses ?>">Administrator</option>
                          <option value="2 <?php echo $e->hak_akses ?>">Manager</option>
                          <option value="3 <?php echo $e->hak_akses ?>">Client</option>
                        </select>
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

  