
<div id="content" class="clearfix">
<div class="page-title">BERITA TERBARU</div>

	<?php
	
		 $berita = mysqli_query($koneksi,"select * from tb_berita");
                while($data=mysqli_fetch_array($berita)){	
		?>
					

	<div class='post-container clearfix'>
		<a href="">
		<img src="img_anekaweb/berita/<?php echo $data['foto']; ?>"/></a>
		<article class='post-content'>
		<h1 class='post-title'>
		<a href=""><?php echo $data['judulberita']; ?></a></h1>
		<div class='post-meta'>
			<div class='date'>
				<?php echo $data['tglpost']; ?> : <?php echo $data['jampost']; ?>
			</div>
		</div>
		<br/><p> <?php echo $data['isiberita']; ?></p>
		</article>
	</div>
	
	<?php
		}
		?>	

</div>