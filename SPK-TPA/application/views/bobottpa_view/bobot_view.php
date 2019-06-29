<div class="row">
    <div class="col-xs-12">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Data Bobot Parameter</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <!-- <p><a href='<?php echo base_url();?>index.php/pengaturan/Bobot/tambahbobot'
                  class='btn btn-primary btn-sm'>
                  <span class='fa fa-plus'></span> Tambah Data
                </a></p> -->
                <p>Jumlah Data : <?php echo $hitungdata->count ?></p>
                <div class="table-responsive">
                  <table id="databobot" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Kelerengan</th>
                          <th>Penggunaan Lahan</th>
                          <th>Rawan Bencana Longsor</th>
                          <th>Curah Hujan</th>
                          <th>Hidrogeologi</th>
                          <th>Jenis Tanah</th>
                          <th>Rawan Bencana Banjir</th>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <th>Edit By</th> <?php } ?>
                          <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($tampil as $row){?>
                      <tr>  
                          <td><?php echo $row->kelerengan?></td>
                          <td><?php echo $row->penggunaan_lahan?></td>
                          <td><?php echo $row->rawan_longsor?></td>
                          <td><?php echo $row->curah_hujan?></td>
                          <td><?php echo $row->hidrogeologi?></td>
                          <td><?php echo $row->jenis_tanah?></td>
                          <td><?php echo $row->rawan_banjir?></td>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <td><?php echo $row->nama_admin?></td> <?php } ?>
                          <td style="text-align: center;">
                            <a href='<?php echo base_url();?>index.php/pengaturan/Bobot/editbobot/<?php echo $row->id_bobot?>' class='btn btn-success btn-sm'> 
                            <span class='fa fa-pencil'>Edit</a>
                            <a href='<?php echo base_url();?>index.php/pengaturan/Bobot/hapusbobot/<?php echo $row->id_bobot?>' class='btn btn-danger btn-sm' onClick="return doconfirm();">
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
        $('#databobot').DataTable()
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