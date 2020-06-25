<?php
    @session_start();
        include "koneksi.php";
        if (@$_SESSION['admin']){
            header("location:inde.php");
        } else  
        if (@$_SESSION['tatausaha']){
            header("location:tatausaha/index.php");
        } else 
        if (@$_SESSION['guru']){
            header("location:guru/index.php");
        } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> SMK MANBA’EL HUDA </title>

<link rel='shortcut icon' href='img_anekaweb/logo/favicon.png' />
 
<!--========= BAGIAN CSS ========================-->
<link rel="stylesheet" href="templates/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="templates/css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="templates/css/dzstooltip.css" type="text/css" />
<link rel="stylesheet" href="templates/css/jquery.ad-gallery.css" type="text/css" />

 <script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
  
  
<!-- Script Facebook -->
<div id="fb-root">
</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<!-- Akhir Script Facebook -->
<!-- Script Copyright -->
<script type="text/javascript">
   if(document.location.protocol=='http:'){
   var Tynt=Tynt||[];Tynt.push('accswOR5Kr4yaUacwqm_6r');Tynt.i={"ap":"<br/><b>Sumber: https://anekaweb.com/SMK Manba'el Huda</b><hr>"};
   (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js'; 
   var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
   }
   </script>
<!-- Akhir Script Copyright -->
  
</head>

<body class="left-sidebar">
<div id="container">
        
	<header>
	
    
    
	<nav class="navigation clearfix">
	<?php include "include/menuheader.php" ?>
	</nav>
    
    
	<div id="sub-menu" class="clearfix">
        
        
		</header>

		<div id="content" class="clearfix">
<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
switch($page){
  case 'home': 
  include "include/home.php"; 
  break;
  
  case 'berita': 
  include "include/berita.php"; 
  break;
  
  case 'sejarah': 
  include "include/sejarah.php"; 
  break;
  
  case 'poling': 
  include "include/poling.php"; 
  break;
  
  
  default: 
  include "include/home.php";
}
?>
</div>
 <aside id="sidebar" class="clearfix">
  
  <?php include "include/menuleft.php"?>
  </aside>
  
<div id="top">
<a href="#top">ke atas</a>
</div>

<footer class="clearfix">

<div class="copyright">
<p>
© Copyright 2020<a href=""> SMK Manba'el Huda</a> <a href="">By: Fitri Yanti</a>
</p>
</div>

</footer>
</div>

<script src=" templates/js/jquery.min.js" type="text/javascript"></script>
<script src=" templates/js/jsliderelatedpages.js" type="text/javascript"></script>
<script type="text/javascript">  
  $().ready(function() {  
  $('#jsrp_related').jsliderelatedposts({
  speed: 1000,  
  scrolltrigger: 0.50,
  smartwidth: true
  });});  
  </script>
<script src=" templates/js/jquery.ad-gallery.pack.js" type="text/javascript"></script>
<script src=" templates/js/jquery.ad-gallery.js.js?rand=700" type="text/javascript"></script>
<script type="text/javascript">
  $(function() {
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
  });
  </script>
<script src=" templates/js/jquery.flexslider.js" type="text/javascript"></script>
<script src=" templates/js/jquery.superfish.js" type="text/javascript"></script>
<script src=" templates/js/jquery.selectbox.min.js" type="text/javascript"></script>
<script src=" templates/js/jquery.masonry.min.js" type="text/javascript"></script>
<script src=" templates/js/jquery.fancybox.js" type="text/javascript"></script>
<script src=" templates/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src=" templates/js/script.js" type="text/javascript"></script>
<script src=" templates/js/text-scroller.js" type="text/javascript"></script>
<script>
  jQuery(document).ready(function($){
  $('#tr1').dzscalendar({
  start_month: ' 06' 
  ,start_year: '2020'
  });
  })
  </script>
</body>
</html>
<?php
}
?>