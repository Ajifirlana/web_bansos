<!-- Form to turn layers on/off -->


<div class="row">
		
	<div class="col-sm-6">
				<div class="footer-content">
					<h2>Cek Bantuan</h2>

					<legend></legend>		
<table>

<?php foreach($content as $p) { ?>
	<?php if($p->status == 'N'){?>
  <th>anda tidak terdaftar di program bantuan apapun</th>
  	
<?php }else{?>
	<tr>
    <th>NIK</th>
    <td>: <?php echo $p->nik ?></td>
  </tr>
  <tr>
  	<th>Nama</th>
  	<td>: <?php echo $p->nama ?></td>
  </tr>
  <tr>
	
<th><?php echo "Anda Tidak Terdaftar di program PKH"?></th>

<?php }?>
</tr>
			<?php }?>
<?php if($content == null){ ?>
			 

<th><?php echo "Data Penerima Bantuan Tidak Ditemukan"?></th>
<?php } ?>
</table>
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
