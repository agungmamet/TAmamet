<div class="row">
  <div class="col-md-6">
          <!-- Horizontal Form -->
    <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Kecamatan</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php foreach ($edit as $e) { ?> <!-- $edit berasal dari controller function edit ['edit'] -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Daerah/updatedaerah" method="POST">
            <input type="hidden" name="iddaerah" value="<?php echo $e->id_daerah ?>" required>
              <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nama Kecamatan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="namadaerah" placeholder="Nama Kecamatan" value="<?php echo $e->nama_daerah?>" required>
                      </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="<?php echo base_url();?>index.php/pengaturan/Daerah/index">
                    <button type="button" class="btn btn-default">Cancel</button>
                  </a>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
        </form>
        <?php } ?>
    </div>
  </div>