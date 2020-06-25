<?php
    @session_start(); 
    include "koneksi.php";

    if(@$_SESSION['admin']){
?>
<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>SMK MANBA’EL HUDA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="#" class="logo">
					<img src="logo.png" width="35" height="35" alt=""> <span>Manba'el Huda</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
               
               
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="inde.php">Dashboard</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">&nbsp; Admin </li>
                        <li class="active">
                            <a href="inde.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Siswa </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="?page=inputsiswa">Input Data Siswa</a></li>
								<li><a href="?page=lihatsiswa">Lihat Data Siswa</a></li>
							</ul>
						</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-laptop"></i> <span> Guru</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="?page=inputguru">Input Data Guru</a></li>
                                <li><a href="?page=lihatguru">Lihat Data Guru</a></li>
                                <li><a href="?page=setmapel">Set Mapel</a></li>

                            </ul>
                        </li>
						<li>
                            <a href="?page=kelas"><i class="fa fa-hospital-o"></i> <span>Kelas</span></a>
                        </li>
						<li>
                            <a href="?page=mapel"><i class="fa fa-book"></i> <span>Mata Pelajaran</span></a>
                        </li>
						
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							
							<?php
                if(@$_GET['page']==''){
                include "home.php";
                } else if(@$_GET['page']=='account'){
                include"account.php";     
                } else if(@$_GET['page']=='editaccount'){
                include"account_edit.php";     
                } else if(@$_GET['page']=='hapusaccount'){
                include"account_hapus.php";     
                } else if(@$_GET['page']=='inputsiswa'){
                include"siswa.php";     
                } else if(@$_GET['page']=='lihatsiswa'){
                include"siswa_lihat.php";     
                } else if(@$_GET['page']=='editsiswa'){
                include"siswa_edit.php";     
                } else if(@$_GET['page']=='inputguru'){
                include"guru.php";
                } else if(@$_GET['page']=='lihatguru'){
                include"guru_lihat.php";     
                } else if(@$_GET['page']=='setmapel'){
                include"guru_set.php";     
                } else if(@$_GET['page']=='editguru'){
                include"guru_edit.php";     
                } else if(@$_GET['page']=='kelas'){
                include"kelas.php"; 
                } else if(@$_GET['page']=='kelas_edit'){
                include"kelas_edit.php"; 
                } else if(@$_GET['page']=='mapel'){
                include"mapel.php"; 
                } else if(@$_GET['page']=='mapel_edit'){
                include"mapel_edit.php"; 
                }
                ?>
							
						</div>
					</div>
					
				</div>
				</div>
            </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>
<?php
    } else {
        header("location: login.php");
    }
?>