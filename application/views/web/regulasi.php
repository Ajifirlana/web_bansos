<div class="col-sm-8"><h1>Berita</h1>	
<legend></legend>
</div>
		<div class="row">

		
			<div class="col-sm-8" >

				<?php
			$i=0;

			foreach($berita as $berita)
			{
			$i++;
		?>
		<?php $judul = $berita->judul_berita;
			$isi = $berita->isi_berita; 
      $gbr = $berita->gambar;
			$idberita = $berita->id_berita;
			?>
				<div class="regulasi-content">
				<div class="regulasi-content-text">
					<h3><a href="<?php echo site_url('web/c_berita/get_detail_berita/'.$idberita);?>"><?php echo $judul;?></a></h3>
					<legend></legend>

            <img width="150%" height="150%" src='<?php echo site_url($gbr);?>'>
					<div class="text-berita">
					<?php echo $isi;?>
					</div>
    			</div>
				</div>
		<?php }?>
		<?php echo $this->pagination->create_links(); ?>
			</div>


<style type="text/css">
	
.day-of-week,
.date-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
}

.day-of-week {
  margin-top: 1.25em;
}

.day-of-week > * {
  font-size: 0.7em;
  color: var(--blue-grey-400);
  font-weight: 500;
  letter-spacing: 0.1em;
  font-variant: small-caps;
  text-align: center;
}

</style>

	
			<div class="col-sm-4" >
<div class="regulasi-content">
				<div class="regulasi-content-text">
					<h3>Kalender</h3>
					<legend></legend>
					<div class="day-of-week">
      <div>Su</div>
      <div>Mo</div>
      <div>Tu</div>
      <div>We</div>
      <div>Th</div>
      <div>Fr</div>
      <div>Sa</div>
    </div>
    <div class="date-grid">
      <button>
        <time datetime="2019-02-01">1</time>
      </button>
      <button>
        <time datetime="2019-02-02">2</time>
      </button>
      <button>
        <time datetime="2019-02-03">3</time>
      </button>
      <button>
        <time datetime="2019-02-04">4</time>
      </button>
      <button>
        <time datetime="2019-02-05">5</time>
      </button>
      <button>
        <time datetime="2019-02-06">6</time>
      </button>
      <button>
        <time datetime="2019-02-07">7</time>
      </button>
      <button>
        <time datetime="2019-02-08">8</time>
      </button>
      <button>
        <time datetime="2019-02-09">9</time>
      </button>
      <button>
        <time datetime="2019-02-10">10</time>
      </button>
      <button>
        <time datetime="2019-02-11">11</time>
      </button>
      <button>
        <time datetime="2019-02-12">12</time>
      </button>
      <button>
        <time datetime="2019-02-13">13</time>
      </button>
      <button>
        <time datetime="2019-02-14">14</time>
      </button>
      <button>
        <time datetime="2019-02-15">15</time>
      </button>
      <button>
        <time datetime="2019-02-16">16</time>
      </button>
      <button>
        <time datetime="2019-02-17">17</time>
      </button>
      <button>
        <time datetime="2019-02-18">18</time>
      </button>
      <button>
        <time datetime="2019-02-19">19</time>
      </button>
      <button>
        <time datetime="2019-02-20">20</time>
      </button>
      <button>
        <time datetime="2019-02-21">21</time>
      </button>
      <button>
        <time datetime="2019-02-22">22</time>
      </button>
      <button>
        <time datetime="2019-02-23">23</time>
      </button>
      <button>
        <time datetime="2019-02-24">24</time>
      </button>
      <button>
        <time datetime="2019-02-25">25</time>
      </button>
      <button>
        <time datetime="2019-02-26">26</time>
      </button>
      <button>
        <time datetime="2019-02-27">27</time>
      </button>
      <button>
        <time datetime="2019-02-28">28</time>
      </button>
    </div>
    			</div>
				</div>

				<div class="regulasi-content">
				<div class="regulasi-content-text">
					<h3>Artikel</h3>
					<legend></legend>
<?php
      $i=0;

      foreach($beritas->result() as $b)
      {
      $i++;
    ?>
    <?php $judul = $b->judul_berita;
      $isi = $b->isi_berita; 
      $idberita = $b->id_berita;
      ?>
        <a href="<?php echo site_url('web/c_berita/get_detail_berita/'.$idberita);?>"><?php echo $judul;?></a>
          <legend></legend>
          <div>
        </div>
    <?php }?>
      </div>
    			</div>
				</div>
	
	</div>
	<script type="text/javascript" charset="utf-8">			
			 function nav_active(){
				var r = document.getElementById("nav-home");
				r.className = "";
				
				var d = document.getElementById("nav-regulasi");
				d.className = d.className + "active";
				}
	</script>