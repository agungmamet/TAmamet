<div class="row">
    <div class="col-md-6">
          <!-- Horizontal Form -->
      <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Jenis Tanah</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/parameter/Jenistanah/simpanjenistanah" method="POST">
            <div class="box-body">
              <?php echo form_open(); ?>
              <?php echo validation_errors(); ?>
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Kecamatan</label>
                    <div class="col-sm-2">
                      <select class="form-control" name="iddaerah" style="width: 333px;" required>
                        <option value="">Pilih Kecamatan</option>
                        <?php
                            foreach($daerah as $data){
                              echo "<option value='".$data->id_daerah."'>".$data->nama_daerah."</option>";
                            }
                        ?>
                      </select>
                    </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nilai Klasifikasi</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="nilaiklasifikasi" style="width: 333px;" required>
                        <option value="">Pilih Nilai Klasifikasi</option>
                        <option value="0">(0) Gromosol</option>
                        <option value="1">(1) Latosol</option>
                        <option value="2">(2) Regosol</option>
                        <option value="3">(3) Alluvial</option>
                      </select>
                    </div>
              </div>

            </div>
              <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/parameter/Jenistanah/index">
                  <button type="button" class="btn btn-default">Cancel</button>
                </a>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
              <!-- /.box-footer -->
        </form>
      </div>
    </div>