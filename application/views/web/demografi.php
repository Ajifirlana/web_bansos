
	<h1>Profil Desa</h1>

	<div class="body-content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="uppercase" style="color:#3C3C3C">Isi</h4>
		</div>
			
	</div>
	</div>
	

<script type="text/javascript" charset="utf-8">			
			 function nav_active(){
				var r = document.getElementById("nav-home");
				r.className = "";
				
				var d = document.getElementById("nav-profil");
				d.className = d.className + "active";
				}

			$(document).ready(function(){  
			document.getElementById("displayPhoto").src = <?php echo site_url($demografi);?>;
			});
</script>	