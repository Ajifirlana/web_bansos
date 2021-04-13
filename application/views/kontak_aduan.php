<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view('template_a');?>
 
 </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'config/top-menu.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'config/side.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small>Control Panel</small>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
  <div class="col-md-12">
<?php 
        if ($this->session->userdata('id_pengguna') == '2' || $this->session->userdata('id_pengguna') == '1' || $this->session->userdata('id_pengguna') == '3') {

         ?>
<br>
 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Inbox</h3>


      </div>

<div class="box-header">
	<?php
          echo $this->session->flashdata('msg');
          ?>

      </div>

      <!-- /.box-header -->
      <div class="box-body">
        <table id="berita" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th>No.</th>

            <th>NIK</th>
            <th>Isi Aduan</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <?php 
          $no = $this->uri->segment('3') + 1;
          
          foreach ($data_aduan->result() as $row) {
           
           ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row->nik; ?></td>

            <td><?php echo $row->isi_aduan; ?></td>
            <td>
              
 <a data-toggle="modal" data-target="#modal-hapus<?=$row->id;?>" button class="btn btn-danger btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
          <?php $no++; } ?>

          </tbody>
          
        </table>
         
      <!-- Modal hapus -->
<?php 

          foreach ($data_aduan->result() as $row) {
           ?>

  <div class="row">
  <div id="modal-hapus<?=$row->id;?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="<?php echo site_url()?>dashboard/hapus_aduan/<?php echo $row->id; ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data Aduan</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menghapus Aduan...???</label>
            
            <label>"<?=$row->isi_aduan;?>"</label>
          </div>
          
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Hapus</button>
          </div>
        </form>

     </div>
  </div>
</div>
        <?php } ?>




      </div>

      <div class="box-header">

      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2021 <a href="http://caramengatasimasalahmu.blogspot.com/">Teknologi</a>.</strong> All rights
    reserved.
  </footer>
<?php }?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<script type="text/javascript">
  $(document).ready( function () {
      $('#berita').DataTable();
  } );
</script>


<!-- ./wrapper -->
<script src="<?php echo base_url();?>assets/admin/dist/js/app.min.js"></script>
 
</body>


</html>


<div class="row">
  <div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
 
<form action="<?php echo site_url()?>Dashboard/tambah_penduduk" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Penduduk</h4>
        </div>
        <div class="modal-body">
 
 
         
         <div class="form-group">
            <label>NIK</label>
            <input type="nik" name="nik" class="form-control">

          </div>

          <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control">

          </div>

          <div class="form-group">
            <label>Tempat Tinggal</label>
            <input type="text" name="tempat_lahir" class="form-control">

          </div>
           
      
        <div class="form-group">
            <label>Tgl Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control">

          </div>

          <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="no_telp" class="form-control">

          </div>

        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Tambah</button>
          </div>
        </form>

     </div>
  </div>
</div>