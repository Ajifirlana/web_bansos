<!-- Form to turn layers on/off -->


<div class="row">
		
	<div class="col-sm-6">
		<?php
          echo $this->session->flashdata('msg');
          ?>
				<div class="footer-content">
					<h2>Cek Bantuan</h2>
					<h4></h4>
					<legend></legend>					
						
			<?php echo form_open('web/cek_bantuan/search/');?>
						<div class="form-group has-feedback">
							<label class="sr-only" for="nama">Masukkan Nama</label>
							<input type="text" class="form-control input-md" placeholder="Nama Lengkap" id="nama" name="nama" required >
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="email">NIK</label>
							<input type="number" class="form-control input-md" placeholder="No NIK Anda" id="nik" name="keyword" required >
						</div>
						
					
						<div align="right" class="form-group has-feedback">
							<button type="submit" id="kirim" name="kirim" class="btn btn-default">Cek</button>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>

</div>

<style>
iframe {width:100%;height:600px;}
</style>
<script type="text/javascript" charset="utf-8">			
			 function nav_active(){
				var r = document.getElementById("nav-home");
				r.className = "";
				
				var d = document.getElementById("nav-peta");
				d.className = "active";
				}
				
			$(document).ready(function(){  
				//doIframe();
			});
		
		
</script>
