<div class="row">
    <div class="col-xs-12">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Ternormalisasi</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Daerah</th>
                          <th>Kelerengan</th>
                          <th>Penggunaan Lahan</th>
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
                          <td><?php echo $row->nama_daerah?></td>  
                          <td><?php echo $row->kelerengan?></td>
                          <td><?php echo $row->lahan?></td>
                          <td><?php echo $row->longsor?></td>
                          <td><?php echo $row->hujan?></td>
                          <td><?php echo $row->hidrogeologi?></td>
                          <td><?php echo $row->tanah?></td>
                          <td><?php echo $row->banjir?></td>
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