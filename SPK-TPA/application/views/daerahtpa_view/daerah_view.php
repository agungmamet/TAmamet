<div class="row">
    <div class="col-xs-8">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Data Kecamatan</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <p><a href='<?php echo base_url();?>index.php/pengaturan/Daerah/tambahdaerah'
                  class='btn btn-primary btn-sm'>
                  <span class='fa fa-plus'></span> Tambah Data
                </a></p>
                <p>Jumlah Data : <?php echo $hitungdata->count ?></p>
                <div class="table-responsive">
                  <table id="datadaerah" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Nama Kecamatan</th>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <th>Edit By</th> <?php } ?>
                          <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($tampil as $row){?>
                      <tr>  
                          <td><?php echo $row->nama_daerah?></td>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <td><?php echo $row->nama_admin?></td> <?php } ?>
                          <td style="text-align: center;">
                            <a href='<?php echo base_url();?>index.php/pengaturan/Daerah/editdaerah/<?php echo $row->id_daerah?>' class='btn btn-success btn-sm'> 
                            <span class='fa fa-pencil'>Edit</a>
                            <a href='<?php echo base_url();?>index.php/pengaturan/Daerah/hapusdaerah/<?php echo $row->id_daerah?>' class='btn btn-danger btn-sm' onClick="return doconfirm();">
                            <span class='fa fa-trash'>Delete</a>
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

    <script>
    $(document).ready(function(){
        $('#datadaerah').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>

    <script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
    </script>