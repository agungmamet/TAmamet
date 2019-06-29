<div class="row">
    <div class="col-md-12" >
        <div class="panel panel-success">
            <?php foreach ($detail as $row){?>
            <input type="hidden" name="idadmin" value="<?php echo $row->id_admin?>">
              <div class="panel-heading">
                <h3 class="panel-title"><b>Detail User</b></h3>
              </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"><img alt="User Image" src="<?php echo base_url();?>assets/dist/img/fix-user.png" class="img-circle img-responsive" style="width: 200px;"><br><p class="panel-title"><h4><b><?php echo $row->nama_admin?></b></h4></p>
                <p></p>
              </div>

              <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Alamat</td>
                        <td>: <?php echo $row->alamat?></td>
                      </tr>
                      <tr>
                        <td><b>TTL</td>
                        <td>: <?php echo $row->ttl?></td>
                      </tr>
                      <tr>
                        <td><b>Jenis Kelamin</td>
                        <td>: <?php if ($row->jeniskelamin==1){echo 'Perempuan';} elseif($row->jeniskelamin==0){echo 'Laki-Laki';}?></td>
                      </tr>
                      <tr>
                        <td><b>Email</td>
                        <td>: <?php echo $row->email?></td>
                      </tr>
                      <tr>
                        <td><b>Telepon</td>
                        <td>: <?php echo $row->telp?></td>
                      </tr>
                      <tr>
                        <td><b>Instansi</td>
                        <td>: <?php echo $row->instansi?></td>
                      </tr>
                      <tr>
                        <td><b>Username</td>
                        <td>: <?php echo $row->username?></td>
                      </tr>
                      <tr>
                        <td><b>Hak Akses</td>
                        <td>: <?php if ($row->hak_akses==1){echo 'Admin';} elseif($row->hak_akses==2){echo 'Manager';} elseif($row->hak_akses==3){echo 'Client';}?></td>
                      </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
              <div class="panel-footer">
                  <a href="<?php echo base_url();?>index.php/pengaturan/Admin/index" class="btn btn-default">
                    <span class="fa fa-arrow-left">Back</a>
                    <?php if ($this->session->userdata('hak_akses')==1){?>
                    <span class="pull-right">
                  <a href='<?php echo base_url();?>index.php/pengaturan/Admin/editadmin/<?php echo $row->id_admin?>' class='btn btn-warning btn-sm'>
                    <span class='fa fa-pencil'>Edit</a></span>
                    <?php } ?>
              </div>
        </div>
            <?php } ?>
    </div>
</div>