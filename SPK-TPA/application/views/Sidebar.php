
  <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="background-color: rgba(0,0,0,0.6);">
    <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url();?>assets/dist/img/fix-user.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('nama_admin');?></p>
                  <?php if ($this->session->userdata('hak_akses')==1){?>
                    <p style="font-size: 10px;">&nbsp;Administrator&nbsp;&nbsp;
                  <?php } else if ($this->session->userdata('hak_akses')==2){?>
                    <p style="font-size: 10px;">&nbsp;Manager&nbsp;&nbsp;
                  <?php } else if ($this->session->userdata('hak_akses')==3){?>
                    <p style="font-size: 10px;">&nbsp;Client&nbsp;&nbsp;
                  <?php } ?>
            <a href="#" style="font-size: 10px;"><i class="fa fa-circle text-success"></i> Online</a></p>
          </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <!-- buat multiakses admin -->
            <li >
              <a href="<?php echo base_url();?>index.php/Peta_kontrol">
                <i class="glyphicon glyphicon-home"></i> <span>Home</span>
              </a>
            </li>

          <li class="treeview">
            <?php if ($this->session->userdata('hak_akses')==1){?>
                <a href="#">
                  <i class="glyphicon glyphicon-wrench"></i>
                  <span>Pengaturan</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <?php } else if ($this->session->userdata('hak_akses')==2){?>
                <a href="#">
                  <i class="glyphicon glyphicon-wrench"></i>
                  <span>Pengaturan</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <?php } ?>
            <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo base_url();?>index.php/pengaturan/Admin">
                        <i class="fa fa-user"></i> <span>Administrator</span>
                      </a>
                    </li>
                   	<li>
                  	  <a href="<?php echo base_url();?>index.php/pengaturan/Daerah">
                  	  	<i class="fa fa-home"></i> <span>Kecamatan</span>
                  	  </a>
                  	</li>
                  	<li>
                  	  <a href="<?php echo base_url();?>index.php/pengaturan/Bobot">
                  	  	<i class="fa fa-dashboard"></i> <span>Bobot Parameter</span>
                  	  </a>
                  	</li>
                    <?php if ($this->session->userdata('hak_akses')==1){?>
                    <li>
                      <a href="<?php echo base_url();?>index.php/Peta_kontrol/peta">
                        <i class="fa fa-globe"></i> <span>Peta</span>
                      </a>
                    </li>
                    <?php } else if ($this->session->userdata('hak_akses')==2){?>
                    <li>
                      <a href="<?php echo base_url();?>index.php/Peta_kontrol/peta">
                        <i class="fa fa-globe"></i> <span>Peta</span>
                      </a>
                    </li>
                    <?php } ?>

            </ul>
          </li>

          <li class="treeview">
                <a href="#">
                  <i class="fa fa-book"></i>
                  <span>Data Parameter</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
            <ul class="treeview-menu">
                <li>
                  <a href="<?php echo base_url();?>index.php/parameter/Kelerengan">
                    <i class="fa fa-book"></i> <span>Data Kelerengan</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/parameter/Lahan">
                  	<i class="fa fa-book"></i> <span>Data Penggunaan Lahan</span>
                  </a>	
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/parameter/Longsor">
                  	<i class="fa fa-book"></i> <span>Data Rawan Longsor</span>
                  </a>	
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/parameter/Hujan">
                  	<i class="fa fa-book"></i> <span>Data Curah Hujan</span>
                  </a>	
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/parameter/Hidrogeologi">
                  	<i class="fa fa-book"></i> <span>Data Hidrogeologi</span>
                  </a>	
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/parameter/Jenistanah">
                  	<i class="fa fa-book"></i> <span>Data Jenis Tanah</span>
                  </a>	
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/parameter/Banjir">
                  	<i class="fa fa-book"></i> <span>Data Rawan Banjir</span>
                  </a>	
                </li>

            </ul>
          </li>

          <li class="treeview">
          		<a href="#">
          			<i class="fa fa-plus"></i>
          			<span>TOPSIS</span>
          			<span class="pull-right-container">
          				<i class="fa fa-angle-left pull-right"></i>
          			</span>
          		</a>
          	<ul class="treeview-menu">
          		<li>
          		  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis">
          		  	<i class="fa fa-plus"></i> <span>Normalisasi</span>
          		  </a>
          		</li>
<!--           		<li>
                  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis/ternormalisasi">
                    <i class="fa fa-plus"></i> <span>Ternormalisasi</span>
                  </a>
                </li> -->
                <li>
                  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis/terbobot">
                  	<i class="fa fa-plus"></i> <span>Terbobot</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis/amax">
                  	<i class="fa fa-plus"></i> <span>A+ dan A-</span>
                  </a>
                </li>
               <!--  <li>
                  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis/amin">
                  	<i class="fa fa-plus"></i> <span>A-</span>
                  </a>
                </li> -->
                <li>
                  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis/dmax">
                  	<i class="fa fa-plus"></i> <span>di+ dan di-</span>
                  </a>
                </li>
                <!-- <li>
                  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis/dmin">
                  	<i class="fa fa-plus"></i> <span>D-</span>
                  </a>
                </li> -->
                <li>
                  <a href="<?php echo base_url();?>index.php/topsis_c/Topsis/v">
                  	<i class="fa fa-plus"></i> <span>Nilai Preferensi</span>
                  </a>
                </li>
          	</ul>          	
          </li>

  </section>
    <!-- /.sidebar -->
</aside>

 <style>
   li{
    font-size: 12px;
   }
 </style>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" style="background-image: url(<?php echo base_url();?>assets/dist/img/alunalun.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; ">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1 style="color: white;">
        Dashboard
      </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>index.php/Peta_kontrol" style="color: white;"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active" style="color: white;">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">
