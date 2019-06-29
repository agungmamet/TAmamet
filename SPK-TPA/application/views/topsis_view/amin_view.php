<div class="row">
    <div class="col-xs-12">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">A Min</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Kelerengan</th>
                          <th>Lahan</th>
                          <th>Rawan Longsor</th>
                          <th>Curah Hujan</th>
                          <th>Hidrogeologi</th>
                          <th>Jenis Tanah</th>
                          <th>Rawan Banjir</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($tampil as $row){?>
                      <tr>  
                          <td><?php echo $row->min_kelerengan?></td>
                          <td><?php echo $row->min_lahan?></td>
                          <td><?php echo $row->min_longsor?></td>
                          <td><?php echo $row->min_hujan?></td>
                          <td><?php echo $row->min_hidrogeologi?></td>
                          <td><?php echo $row->min_tanah?></td>
                          <td><?php echo $row->min_banjir?></td>
                      </tr>
                          <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<style>
  table th{
    text-align: center;
  }
</style>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
