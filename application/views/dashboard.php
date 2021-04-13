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
    <?php if ($this->session->userdata('id_pengguna') == '2'){?>
                 <a data-toggle="modal" data-target="#modal-tambah" button class="btn btn-primary" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-plus"></i>Tambah Penduduk<br></a>
               <?php }?>
<?php 
        if ($this->session->userdata('id_pengguna') == '2' || $this->session->userdata('id_pengguna') == '1' || $this->session->userdata('id_pengguna') == '3') {

         ?>



<br>
 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Penerima Bantuan</h3>


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
            <th>Nama Lengkap</th>
<th>Foto</th>
            <th>Tempat dan Tanggal Lahir</th>
            <th>No. Telepon</th>
             <th>Jenis Kelamin</th>

             <th>Pekerjaan</th>

             <th>Status</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <?php 
          $no = $this->uri->segment('3') + 1;
          
          foreach ($content->result() as $row) {
           
           ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row->nik; ?></td>

            <td><?php echo $row->nama; ?></td>
            <td><img width="50px" height="50px" src='<?php echo site_url($row->image);?>'> </td>
            <td><?php echo $row->tempat_lahir; ?>, <?php echo $row->tanggal_lahir; ?></td>
            <td><?php echo $row->no_telp; ?></td>
             <td><?php echo $row->jenis_kelamin; ?></td>
             <?php if($row->pekerjaan==null) {?>
              <td>
                Data Tidak Ada
 </td>
             <?php }else{?>
             <td><?php echo $row->pekerjaan; ?></td>
           <?php }?>
           <?php if($row->status== 'N')
          {echo "<td>Ditolak</td>";}else{echo "<td>Diverifikasi</td>";}?>
           
            <td>
              <?php if($this->session->userdata('id_pengguna') == '2'){?>
                 <a data-toggle="modal" data-target="#modal-edit<?=$row->id_penduduk;?>" button class="btn btn-info btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o"></i></a>

 <a data-toggle="modal" data-target="#modal-hapus<?=$row->id_penduduk;?>" button class="btn btn-danger btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
<?php }?>

<?php if($this->session->userdata('id_pengguna') == '1' || $this->session->userdata('id_pengguna') == '3'){?>

<?php if($row->status=='N') {?>

 <a data-toggle="modal" data-target="#modal-veriifikasi<?=$row->id_penduduk;?>" button class="btn btn-success btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Verifikasi">Verifikasikan</a>
  <?php }
  else{?>

 <a data-toggle="modal" data-target="#modal-tolak<?=$row->id_penduduk;?>" button class="btn btn-danger btn-flat btn-xs" data-popup="tooltip" data-placement="top" title="Verifikasi">Tolak</a>
  <?php }?>
 <?php }?>
            </td>
          </tr>
          <?php $no++; } ?>

          </tbody>
          
        </table>
         
      <!-- Modal hapus -->
<?php 

          foreach ($content->result() as $row) {
           ?>

  <div class="row">
  <div id="modal-hapus<?=$row->id_penduduk;?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="dashboard/hapus_penduduk/<?php echo $row->id_penduduk; ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data Penduduk</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_penduduk;?>" name="id_berita" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menghapus Penduduk...???</label>
            
            <label>"<?=$row->nama;?>"</label>
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

        <!-- Modal Verifikas -->
<?php 

          foreach ($content->result() as $row) {
           ?>

  <div class="row">
  <div id="modal-veriifikasi<?=$row->id_penduduk;?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="dashboard/verifikasi/<?php echo $row->id_penduduk; ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Verifikasi Penduduk</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" name="id_penduduk" value="<?=$row->id_penduduk;?>" class="form-control" >
           <input type="hidden" name="status" value="Y" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menverifikasi Penduduk...???</label>
            
            <label>"<?=$row->nama;?>"</label>
          </div>
          
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i>Verifikasi</button>
          </div>
        </form>

     </div>
  </div>
</div>
        <?php } ?>


<!-- Modal Tolak -->
<?php 

          foreach ($content->result() as $row) {
           ?>

  <div class="row">
  <div id="modal-tolak<?=$row->id_penduduk;?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="dashboard/tolak/<?php echo $row->id_penduduk; ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tolak Data Penduduk</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" name="id_penduduk" value="<?=$row->id_penduduk;?>" class="form-control" >
           <input type="hidden" name="status" value="N" class="form-control" >
 
 <div class="form-group">
            <label>Apakah Anda Yakin Menverifikasi Penduduk...???</label>
            
            <label>"<?=$row->nama;?>"</label>
          </div>
          
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i>Verifikasi</button>
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

    <!-- Modal Ubah -->
<?php 
          foreach ($content->result() as $row) {
           ?>

  <div class="row">
  <div id="modal-edit<?=$row->id_penduduk;?>" class="modal fade">
    <div class="modal-dialog">
 
<form action="<?php echo site_url('Dashboard/edit_penduduk')?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Penduduk</h4>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_penduduk;?>" name="id_penduduk" class="form-control" >
 
         
         <div class="form-group">
            <label>NIK</label>
            <input type="nik" name="nik" class="form-control" value="<?=$row->nik;?>">

          </div>

          <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control" value="<?=$row->nama;?>">

          </div>

          <div class="form-group">
            <label>Tempat Tinggal</label>
            <input type="text" name="tempat_lahir" class="form-control" value="<?=$row->tempat_lahir;?>">

          </div>
           
      
        <div class="form-group">
            <label>Tgl Lahir</label>
            <input type="text" name="tanggal_lahir" class="form-control" value="<?=$row->tanggal_lahir;?>">

          </div>

          <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="<?=$row->no_telp;?>">

          </div>

        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
          </div>
        </form>

     </div>
  </div>
</div>
        <?php } ?>


<!-- END Modal Ubah -->

<div class="row">
  <div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
 
<form action="<?php echo site_url()?>dashboard/tambah_penduduk" method="post" enctype="multipart/form-data">
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
            <label>Nama Lengkap</label>
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
            <label>Foto</label>
            <input type="file" name="image" class="form-control">

          </div>
           

          <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="no_telp" class="form-control">

          </div>

            <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin"> 
              <option value="Laki-Laki">Laki-Laki</option>

              <option value="Perempuan">Perempuan</option>
            </select>

          </div>

          <div class="form-group">
            <label>Pekerjaan</label>

            <input type="text" name="pekerjaan" class="form-control">

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