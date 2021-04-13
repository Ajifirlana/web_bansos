<div class="container">
<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav">
		<li id="nav-home" class=""><a href="<?php echo site_url('/');?>">Beranda</a></li>

		<li id="nav-berita"><a href="<?php echo site_url('web/profil/');?>">Profil</a></li>
		<li id="nav-profil" class="dropdown">
			<a class="dropdown-toggle dropdownhover" data-toggle="dropdown" href="#">
			Bantuan <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo site_url('web/bltdd/');?>">BLTDD</a></li>
				<li><a href="<?php echo site_url('web/profil/');?>">BSP</a></li>
				<li><a href="<?php echo site_url('web/bltdd/');?>">BSI</a></li>

				<li><a href="<?php echo site_url('web/c_visimisi/');?>">PKH</a></li>
			</ul>
		</li>
		<li id="nav-peta"><a href="<?php echo site_url('web/cek_bantuan/');?>">Cek Bantuan</a></li>
		
		<li id="nav-peta"><a href="<?php echo site_url('web/about/');?>">About</a></li>

		
	</ul>

<ul class="nav navbar-nav navbar-right">
		<li class="navbar-right" id="navbar-search">
			<a>
				<i class="fa fa-search"></i>
			</a>
			<div class="hidden" id="navbar-search-box">
			
			<?php $this->load->helper(array('form', 'search')); ?>		
			<?php echo form_open('web/c_pages/search/');?>
			<?php echo validation_errors(); ?>	
			<fieldset>			
				<div class="input-group">
					<input type="text" class="form-control" name="keyword" id="keyword" autofocus placeholder="Masukkan Kata Kunci">
					<span class="input-group-btn">
						<button class="btn btn-default" value="Submit" name="submit" type="submit">Cari</button>
					</span>
				</div>		
				</fieldset>
			<?php echo form_close(); ?>
			
			</div>
		</li>	
	</ul>

</div>
</div>