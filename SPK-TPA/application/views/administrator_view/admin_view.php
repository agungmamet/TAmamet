<div class="row">
    <div class="col-xs-12">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Data Administrator</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <p><a href='<?php echo base_url();?>index.php/pengaturan/Admin/tambahadmin'
                  class='btn btn-primary btn-sm'>
                  <span class='fa fa-plus'></span> Tambah Data
                </a></p>
                <p></p>
                <div class="table-responsive">
                  <table id="dataadmin" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Nama Admin</th>
                          <th>Username</th>
                          <th>Hak Akses</th>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <th>Opsi</th>
                          <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($tampil as $row){?>
                      <tr>  
                          <td><?php echo $row->nama_admin?></td>
                          <td><?php echo $row->username?></td>
                          <td><?php if ($row->hak_akses==1){echo 'Admin';} elseif($row->hak_akses==2){echo 'Manager';} elseif($row->hak_akses==3){echo 'Client';}?></td>
                          
                          <td style="text-align: center;">
                            <a href='<?php echo base_url();?>index.php/pengaturan/Admin/editadmin/<?php echo $row->id_admin?>' class='btn btn-success btn-sm'> 
                            <span class='fa fa-pencil'>Edit</a>
                            <a href='<?php echo base_url();?>index.php/pengaturan/Admin/detail/<?php echo $row->id_admin?>' class='btn btn-warning btn-sm'> 
                            <span class='fa fa-eye'>Detail</a>
                            <a href='<?php echo base_url();?>index.php/pengaturan/Admin/resetpass/<?php echo $row->id_admin?>' class='btn btn-default btn-sm'> 
                            <span class='fa fa-warning'>Reset Pass</a>
                            <a href='<?php echo base_url();?>index.php/pengaturan/Admin/hapusadmin/<?php echo $row->id_admin?>' class='btn btn-danger btn-sm' onClick="return doconfirm();">
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
        $('#dataadmin').DataTable()
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