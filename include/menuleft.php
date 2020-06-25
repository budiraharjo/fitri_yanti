<ul>
  	<li class='widget widget_archive'><div class='page-title2'>LOGIN</div>
      <ul>
     <div class='login-form'>
	 
     <form method="post">
	 
	 <input type="text" name="username" placeholder="Username">
     <input type="password" name="pass" placeholder="Password">
     <input type="submit" name="login" class="btn btn-primary" value="Log In">
     </form>
	 
	 
	 <?php
                            if (@$_POST['login']){
                                $username = @$_POST['username'];
                                $pass = @$_POST ['pass'];
                                if ($username == '' || $pass == ''){
                                    ?>
                                    <script type="text/javascript">alert("Username / Password Tidak Boleh Kosong")</script>
                                    <?php
                                } else {
                                    $sql = mysqli_query($koneksi,"select * from tb_pengguna where username = '$username' and pass = '$pass'") 
									or die (mysqli_error());
                                    $data = mysqli_fetch_array($sql);
                                    $cek = mysqli_num_rows($sql);
                                        if ($cek >= 1){
                                            if($data['status'] == "admin"){
                                                @$_SESSION ['admin'] = $data ['id_pengguna'];
												echo "<script>alert('Login Admin');window.location='inde.php'</script>";      
                                            } else if($data['status'] == "tatausaha"){
                                                @$_SESSION ['tatausaha'] = $data ['id_pengguna'];
												echo "<script>alert('Login Tata Usaha');window.location='tatausaha/index.php'</script>"; 
                                            } else if($data['status'] == "guru"){
                                                @$_SESSION ['guru'] = $data ['id_pengguna'];
												echo "<script>alert('Login Guru');window.location='guru/index.php'</script>"; 
                                     
                                            }
                            
                                        } else  {
                                            ?>
                                            <script type="text/javascript">alert("Login Gagal")</script>
                                            <?php
                                        }
                                }
                            }
                        ?>
     </div>

	 </ul>
     </li>  
		
  <li class="widget tabs-widget">

  <div id="popular-tab">
  <div class="page-title2">PENGUMUMAN</div>
  
  <ul>
  
  <li>
  <a href='pengumuman/2014/08/19/2/jadwal-pelaksanaan-tes-peserta-didik-baru'>
  <img alt='Jadwal Pelaksanaan Tes Peserta Didik Baru' src='img_anekaweb/pengumuman/small_278167buku.jpg'></a>
  <h3><a href='pengumuman/2014/08/19/2/jadwal-pelaksanaan-tes-peserta-didik-baru'><b>Jadwal Pelaksanaan Tes Peserta Didik Baru</b></a></h3>
  <div class='post-meta'>
	<div class='date'>19 Agustus 2014 | dibaca 317 pembaca
	</div>
</div>
  </li> 
  <li>
  <a href='pengumuman/2014/08/24/1/kalender-pendidikan-2015'>
  <img alt='Kalender Pendidikan 2015' src='img_anekaweb/pengumuman/small_989440kaee.jpg'></a>
  <h3><a href='pengumuman/2014/08/24/1/kalender-pendidikan-2015'><b>Kalender Pendidikan 2015</b></a></h3>
  <div class='post-meta'>
	<div class='date'>24 Agustus 2014 | dibaca 198 pembaca
	</div>
</div>
  </li>   </ul>
  
  </div>

  </li>
  
  
  <li class="widget widget_video">
  <div class="page-title2">VIDEO KEGIATAN</div>
  <iframe width='100%' height='200' src='https://www.youtube.com/embed/ONCOGW_zVDc' frameborder='0' allowfullscreen></iframe><br/>
		<b> Pembimbing Praktik Pertanian</b>
		<p>
Ketua kelompok tani </p>						
  </li>
  
  
  <li class="widget widget_archive">
  <div class="page-title2">KATEGORI BERITA</div>
  <ul>
  
   <li>
   <a href='kategoriberita/dinamika-sekolah'>Dinamika Sekolah 
   <span class='jumblog'>(2)</span></a>
   </li>
   <li>
   <a href='kategoriberita/dunia-siswa'>Dunia Siswa 
   <span class='jumblog'>(3)</span></a>
   </li>
   <li>
   <a href='kategoriberita/ragam-edukasi'>Ragam Edukasi 
   <span class='jumblog'>(1)</span></a>
   </li>
   <li>
   <a href='kategoriberita/serba-serbi'>Serba Serbi 
   <span class='jumblog'>(2)</span></a>
   </li>   </ul>
   </li>
   
   
  <li class="widget widget_archive">
  <div class="page-title2">DOWNLOAD AREA</div>
  <ul>
  
  <li>
  <a href='webconfig/download.php?file=shopping cart.pdf'>Membuat Shopping Cart </a>
  </li>
  <li>
  <a href='webconfig/download.php?file=Excell_VBA.ppt'>Slide Pemrograman VBA Excell</a>
  </li>  </ul>
  </li>
  
  
  <li class="widget widget_social_media">
  <div class="page-title2">LINK TERKAIT</div>
  <ul>
  
  
  <li>
  <a href="https://docs.google.com/forms/d/e/1FAIpQLSet_i5fvGMErrNH0dJMeeBOfYydqPDcxSSKGl7PRzrJXc1Hwg/viewform" target='_blank' title='Website Murah'>
  <img src='img_anekaweb/link/website-murah.jpg'></a>
  </li>
  <li>
  <a href="https://docs.google.com/forms/d/e/1FAIpQLSet_i5fvGMErrNH0dJMeeBOfYydqPDcxSSKGl7PRzrJXc1Hwg/viewform" target='_blank' title='Anekaweb'>
  <img src='img_anekaweb/link/logo-anekaweb-link.jpg'></a>
  </li>  </ul>
  </li>
  
  
  
  <li class="widget widget_social_media">
  <div class="page-title2">POLLING</div>
  <div class='poling'><class style="color:#333;font-size:12px;font-weight:400"><b>Bagaimana tampilan website MyShool?</b></div><form method=POST action='hasil-poling.html'><br/>
		<div class='marginpoling'>
			<input type=checkbox name=pilihan value='2'/>
			<class style="color:#333;font-size:12px;font-weight:400"> &nbsp;<b>Bagus</b>
		</div>
		<br/>
		<div class='marginpoling'>
			<input type=checkbox name=pilihan value='3'/>
			<class style="color:#333;font-size:12px;font-weight:400"> &nbsp;<b>Biasa Saja</b>
		</div>
		<br/>
		<div class='marginpoling'>
			<input type=checkbox name=pilihan value='4'/>
			<class style="color:#333;font-size:12px;font-weight:400"> &nbsp;<b>Tidak Bagus</b>
		</div>
		<br/>
		<div>
			<input type=submit value='PILIH' class='button-blue'/>
		</form>
		<a href=lihat-poling.html><input type=button value='LIHAT HASIL' class='button-gray'></a>
	</div>
	  </li>
  
  
  <li class="widget widget_video">
  <div class="page-title2">STATISTIK PENGUNJUNG</div>
              
		<table width="90%" height="151" border="0" cellpadding="0" cellspacing="0" style="font-size:12px; color: #a8a8a8; 

	  margin-top:15px; margin-bottom:15px; margin-left:0px;">

    <tr>
              <td width="20%"> Online </td>
              <td>: <b>1</b> User </td>
          </tr>
            <tr>
              <td>Hari Ini  </td>
              <td>: 
                3</td>
          </tr>
            <tr>
              <td>Kemarin</td>
              <td>: 
                3</td>
          </tr>
            <tr>
              <td>Bulan Ini</td>
              <td> : 
                89</td>
          </tr>
            <tr>
              <td> Tahun Ini </td>
              <td>: 
                880</td>
          </tr>
            <tr>
              <td> Total</td>
              <td>: 
                3700</td>
          </tr>
          </table>					
  </li>
  
  
  
  <li class="widget widget_archive">
  <div class="page-title2">FACEBOOK</div>
  <ul>
  
  <li>
  <div class='facebookOuter'>
      <div class='facebookInner'>
      <div class='fb-like-box'  data-width='300' data-height='350'
      data-href='https://www.facebook.com/smkmh.gosch.id/'
      data-border-color='#fff' data-show-faces='true'
      data-stream='false' data-header='false'>
      </div>         
      </div>     
      </div>
	  <div id='fb-root'></div>  </li>
  </ul>
  </li>