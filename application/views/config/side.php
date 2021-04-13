<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">
        <li class="header">Selamat Datang
<br>
          <?php echo $this->session->userdata('nama_pengguna'); ?></li>
        
      </ul>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li class="header">MAIN NAVIGATION</li>
       
        <li class="treeview">
          <a href="<?php echo base_url();?>dashboard">
            <i class="fa fa-user"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
     
<?php 
        if ($this->session->userdata('id_pengguna') == '1') {
         ?>
    
          <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Bantuan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?php echo base_url();?>dashboard/bltdd"><i class="fa fa-inbox"></i>BLTDD</a></li>
 <li><a href="<?php echo base_url();?>dashboard/bst"><i class="fa fa-inbox"></i>BST</a></li>
 <li><a href="<?php echo base_url();?>dashboard/bsp"><i class="fa fa-inbox"></i>BSP</a></li>
 <li><a href="<?php echo base_url();?>dashboard/pkh"><i class="fa fa-inbox"></i>PKH</a></li>

          </ul>
        </li>

      <?php }?>
      <?php 
        if ($this->session->userdata('id_pengguna') == '1' || $this->session->userdata('id_pengguna') == '2' || $this->session->userdata('id_pengguna') == '3') {
         ?>
      
       <li class="treeview">
          <a href="<?php echo base_url();?>dashboard/kontak_aduan">
            <i class="fa fa-user"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
        
      <?php } ?>

       <?php 
        if ($this->session->userdata('id_pengguna') == '1') {
         ?>
    
      

         <li class="treeview">
          <a href="<?php echo base_url();?>dashboard/artikel">
            <i class="fa fa-files-o"></i> <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>

           <?php } ?>
     
         
       
      <li class="treeview">
          <a href="<?php echo base_url();?>web/login/logout">
            <i class="fa fa-user"></i> <span>Logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
    
        </li>
        </ul>

    
    </section>
    <!-- /.sidebar -->
  </aside>