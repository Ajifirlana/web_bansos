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
        if ($this->session->userdata('id_pengguna') == '2' || $this->session->userdata('id_pengguna') == '1') {

         ?>
          <a data-toggle="modal" data-target="#modal-tambah" button class="btn btn-primary" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-plus"></i>Tambah Berita<br></a>
<br>
 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Berita</h3>


                
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

            <th>Judul Berita</th>
            <th>Gambar</th>
            <th>Isi Berita</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <?php 
          $no = $this->uri->segment('3') + 1;
          
          foreach ($berita->result() as $row) {
           
           ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row->judul_berita; ?></td>

            <td><img width="150px" height="150px" src='<?php echo site_url($row->gambar);?>'> </td>
            <td><?php echo $row->isi_berita; ?></td>
            <td>
              
 <a data-toggle="modal" data-target="#modal-hapus<?=$row->id_berita;?>" button class="btn btn-danger btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
          <?php $no++; } ?>

          </tbody>
          
        </table>
         
      <!-- Modal hapus -->
<?php 

          foreach ($berita->result() as $row) {
           ?>

  <div class="row">
  <div id="modal-hapus<?=$row->id_berita;?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="<?php echo site_url()?>dashboard/hapus_berita/<?php echo $row->id_berita; ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Berita</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menghapus Aduan...???</label>
            
            <label>"<?=$row->judul_berita;?>"</label>
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
 
<form action="<?php echo site_url()?>dashboard/simpan_berita" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Berita</h4>
        </div>
        <div class="modal-body">
 
 
         
         <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul_berita" class="form-control">

          </div>

          <div class="form-group">
            <label>Isi Berita</label>
            <textarea class="form-control" rows="3" cols="3" name="isi_berita"></textarea>
         

          </div>

          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">

            <input type="hidden" name="user" class="form-control" value="<?php echo $this->session->userdata('id_pengguna')?>">

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