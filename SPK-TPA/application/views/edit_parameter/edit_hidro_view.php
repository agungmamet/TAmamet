<div class="row">
  <div class="col-md-6">
          <!-- Horizontal Form -->
    <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data Hidrogeologi</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php foreach ($edit as $e) { ?> <!-- $edit berasal dari controller function edit ['edit'] -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/parameter/Hidrogeologi/updatehidro" method="POST">
            <input type="hidden" name="idklasifikasi" value="<?php echo $e->id_klasifikasi?>" required>
              <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Daerah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="daerah" placeholder="Nama Daerah" disabled value="<?php echo $e->nama_daerah?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nilai Klasifikasi</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="nilaiklasifikasi" style="width: 333px;" required>
                        <option value="">Pilih Nilai Klasifikasi</option>
                        <option value="0 <?php echo $e->hidrogeologi ?>" >(0) Akuifer Produktif</option>
                        <option value="1 <?php echo $e->hidrogeologi ?>" >(1) Akuifer Sedang</option>
                        <option value="2 <?php echo $e->hidrogeologi ?>" >(2) Air Tanah Langka</option>
                      </select>
                    </div>
                  </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="<?php echo base_url();?>index.php/parameter/Hidrogeologi/index">
                    <button type="button" class="btn btn-default">Cancel</button>
                  </a>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
        </form>
        <?php } ?>
    </div>
  </div>