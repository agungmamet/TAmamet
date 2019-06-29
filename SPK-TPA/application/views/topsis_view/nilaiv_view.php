<div class="row">
              <div class="col-xs-2">
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formula <span class="glyphicon glyphicon-chevron-down"></span>
                  </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header"><h3><b>Rumus</b></h3></li>
                        <li>
                          <img style="width: 500px; height: 250px; margin-left: 15px; margin-right: 15px;" src="<?php echo base_url();?>assets/dist/img/7ci.png">
                        </li>
                      <li class="dropdown-header"><h3><b>Penjelasan</b></h3></li>
                        <li class="dropdown-header">
                          <h5><strong>enak susunya mama mama enak susunya mama mama</strong></h5>
                        </li>
                    </ul>
                </div>
              </div>
</div>
  <div class="row">
    <div class="col-xs-6">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Nilai Preferensi</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
			         <p>Nilai Tertinggi : <?php echo round($maksimal->max,4)?></p>
                <div class="table-responsive">
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr bgcolor="#b5f2ae">
                          <th>Daerah</th>
                          <th>Nilai V</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($tampil as $row){?>
                      <tr>
                          <td><?php echo $row->nama_daerah?></td>  
                          <td><?php echo round($row->v,4)?></td>
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
  table td{
    text-align: center;
  }
</style>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
