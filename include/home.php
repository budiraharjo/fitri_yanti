 <div id="slider" class="version1 clearfix">
			<div class="flexslider">
				<ul class="slides">
					
					  <li>
					 <img src='img_anekaweb/header/62banner-sekolah.jpg' alt='AnekaWeb.com'>
					 <div class='flex-caption'>
						<h1><a href='#'>Siswa Siswi " SMK Manba'el Huda " Lulusan Terbaik 2015</a></h1>
					</div>
					</li>
					 
					  <li>
					 <img src='img_anekaweb/header/2banner-sekolah-1.jpg' alt='AnekaWeb.com'>
					 <div class='flex-caption'>
						<h1><a href='#'>Pengajar Profesional dalam bidang masing-masing</a></h1>
					</div>
					</li>
					 
					  <li>
					 <img src='img_anekaweb/header/97banner-sekolah-2.jpg' alt='AnekaWeb.com'>
					 <div class='flex-caption'>
						<h1><a href='#'>Fasilitas SMK Manba'el Huda " Lab. Komputer"</a></h1>
					</div>
					</li>
					 				</ul>
				<div class="flex-pause-play">
				</div>
			</div>
		</div>
        <div id="content" class="clearfix">
        
	<div class='page-title'>Selamat Datang di Website SMK Manba'el Huda </div><img src='img_anekaweb/welcome/small_86kepsek.jpg' height='150' border=0 class='AnekaWebimage'>
  <p> <p>Alhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya. Metamorfosa dunia pendidikan tak lagi bisa dihindari sejalan dengan peradaban IPTEK, termasuk SMK Manba'el Huda Mandalawangi sebagai institusi pendidikan berusaha membangun efektivitas komunikasi dan informasi dalam era globalisasi. Sistem digital telah berkembang secara cepat dan merambah pesat dalam dunia pendidikan. Oleh karena itu, revolusi teknologi informasi ini kita optimalkan agar pendidikan masa mendatang lebih bersifat terbuka dan kolaboratif. Berbagai informasi berkaitan dengan program dan pengembangan sekolah dapat diakses melalui website SMK Manba'el Huda Mandalawangi sehingga media ini dapat digunakan sebagai sarana interaksi antara sekolah dengan siswa, orang tua siswa, alumni dan stakeholder lainnya secara luas. Kami sadari bahwa website SMK Manba'el Huda Mandalawangi masih banyak kekurangan baik dari sisi tampilan, menu maupun isi. Namun demikian, kami akan terus berkreasi dan meng-update agar informasi penyelenggaraan pendidikan dapat tersosialisasi dengan baik.</p>
</p> <br/><br/>

<div class="posts-container clearfix">
<div class="page-title">
GALERI FOTO
</div>
<div class="carousel">
<ul class="slides">

  <li>
<a href="">
<img src='img_anekaweb/album/small_72ruang-kursus-komputer.jpg' alt='Kursus Komputer'>
</a>
<a href='galeri-foto/2017/02/21/4/kursus-komputer'>
<h2>Kursus Komputer</h2>
</a>
</li>

  <li>
<a href="">
<img src='img_anekaweb/album/small_61prestasi-siswa.jpg' alt='Prestasi Siswa'>
</a>
<a href='galeri-foto/2016/05/31/3/prestasi-siswa'>
<h2>Prestasi Siswa</h2>
</a>
</li>

  <li>
<a href="">
<img src='img_anekaweb/album/small_11Taekwondo.jpg' alt='Kegiatan Ektrakulikuler'>
</a>
<a href='galeri-foto/2014/02/11/2/kegiatan-ektrakulikuler'>
<h2>Kegiatan Ektrakulikuler</h2>
</a>
</li>

  <li>
<a href="">
<img src='img_anekaweb/album/small_27bandung-techno.jpg' alt='Studi Banding'>
</a>
<a href='galeri-foto/2014/02/11/1/studi-banding'>
<h2>Studi Banding</h2>
</a>
</li>
</ul>
</div>
</div>

<div class="page-title">LIST BERITA</div>

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
	

<div class="posts-container clearfix">
<div class="page-title">AGENDA</div>
<div class="carousel">
<ul class="slides">

  <li>
<a href="">
<img src='img_anekaweb/agenda/small_154 wajib d bw.jpg' alt='$Study Tour 2017'>
</a>
<a href='agenda/2017/02/21/4/study-tour-2017'>
<h2>Study Tour 2017</h2>
</a>
</li>

  <li>
<a href="">
<img src='img_anekaweb/agenda/small_4musnas.jpeg' alt='$Karya Wisata Museum Nasional'>
</a>
<a href='agenda/2016/02/07/3/karya-wisata-museum-nasional'>
<h2>Karya Wisata Museum Nasional</h2>
</a>
</li>

  <li>
<a href="">
<img src='img_anekaweb/agenda/small_30paskibra.jpg' alt='$Seleksi Paskibra Nasional'>
</a>
<a href='agenda/2016/02/07/2/seleksi-paskibra-nasional'>
<h2>Seleksi Paskibra Nasional</h2>
</a>
</li>

  <li>
<a href="">
<img src='img_anekaweb/agenda/small_47gladian-kedisplinan.jpg' alt='$"Gladian Kedisiplinan"'>
</a>
<a href='agenda/2016/02/07/1/gladian-kedisiplinan'>
<h2>"Gladian Kedisiplinan"</h2>
</a>
</li>
</ul>
</div>
</div>

</div>