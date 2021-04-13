<div class="footer-atas">
	<div class="container">
		<div class="row">
		
			<div class="col-sm-6">
				<div class="footer-content">
					<h2>Kontak Aduan</h2>
					<h4></h4>
					<legend></legend>					
					<?php 
					echo form_open('web/cek_bantuan/kirim_aduan/'); ?>
						<div class="form-group has-feedback">
							<label class="sr-only" for="nama">Masukkan Nama</label>
							<input type="text" class="form-control input-md" placeholder="Nama Lengkap" id="nama" name="nama" required >
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="email">NIK</label>
							<input type="number" class="form-control input-md" placeholder="No NIK Anda" id="email" name="nik" required >
						</div>
						<div class="form-group has-feedback">
							<textarea class="form-control input-md" rows="2" placeholder="Isi Pesan" id="pesan" name="isi_aduan" required></textarea>
						</div>
						
					
						<div align="right" class="form-group has-feedback">
							<button id="kirim" name="kirim" class="btn btn-default">Kirim</button>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-bawah">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				&reg; 2021 | &copy; DESA BODEH | <a target="_blank" href="https://www.facebook.com/groups/957038434687409?_rdc=1&_rdr">Marketplace</a>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<!-- Alertify CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assetku/alertify/themes/alertify.core.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assetku/alertify/themes/alertify.default.css" id="toggleCSS" />	 

<!-- Alertify JavaScript -->
<script src="<?php echo base_url(); ?>assetku/alertify/lib/alertify.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assetku/js/jquery-1.11.0.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assetku/realperson/jquery.realperson.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>assetku/realperson/jquery.plugin.js"></script>	
<script type="text/javascript" src="<?php echo base_url(); ?>assetku/realperson/jquery.realperson.js"></script>	

<style>
label { display: none; width: 20%; }

.realperson-challenge 
{  
	display: inline-block;
	padding : 2px;	
	padding-top : 5px;
	margin-bottom : 13px;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>

<script>

$(function() {
	$('#aunt').realperson({chars: $.realperson.alphanumeric,regenerate: '',length: 5});
	
	$('.realperson-challenge').click(function() { 
		window.location.reload(1);
	});
	
	$('#formKontak').submit(function(event) { 
	
	$.ajax({
		type: "POST",
		url: "<?=site_url("c_kontak/simpan_kontak/");?>",
		data: $('form').serialize(),
		success: function(data){
			if(data){
				alertify.success("Terima Kasih, pesan telah terkirim !");
				$('#kirim').prop('disabled', true);
					setTimeout(function(){
				   window.location.reload(1);
				}, 1000);
			}
			else {
				alertify.error("Kode tidak cocok !");
				$('#kirim').prop('disabled', true);
				setTimeout(function(){
				   window.location.reload(1);
				}, 1000);
			}
		}
	});			
	//return true;
	event.preventDefault();
	});
});

</script>
