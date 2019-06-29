<div class="row">
  <div class="col-md-6">
          <!-- Horizontal Form -->
    <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Bobot Parameter</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php foreach ($edit as $e) { ?> <!-- $edit berasal dari controller function edit ['edit'] -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Bobot/updatebobot" method="POST">
            <input type="hidden" name="idbobot" value="<?php echo $e->id_bobot ?>" required>
              <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Kelerengan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="kelerengan" placeholder="Kelerengan" value="<?php echo $e->kelerengan?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Penggunaan Lahan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="lahan" placeholder="Penggunaan Lahan" value="<?php echo $e->penggunaan_lahan?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Rawan Longsor</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="longsor" placeholder="Rawan Bencana Longsor" value="<?php echo $e->rawan_longsor?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Curah Hujan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="hujan" placeholder="Curah Hujan" value="<?php echo $e->curah_hujan?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Hidrogeologi</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="hidrogeologi" placeholder="Hidrogeologi" value="<?php echo $e->hidrogeologi?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Jenis Tanah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="tanah" placeholder="Jenis Tanah" value="<?php echo $e->jenis_tanah?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Rawan Banjir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="banjir" placeholder="Rawan Bencana Banjir" value="<?php echo $e->rawan_banjir?>" required>
                      </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="<?php echo base_url();?>index.php/pengaturan/Bobot/index">
                    <button type="button" class="btn btn-default">Cancel</button>
                  </a>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
        </form>
        <?php } ?>
    </div>
  </div>