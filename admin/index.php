<?php
include "../koneksi.php";
if(!isset($_SESSION))
  session_start();
if(!isset($_SESSION['udahlogin']) )
  header("location:login.php");
 $username=$_SESSION['username'];

 //penerimaan
 $totpendaftar=mysql_query("select count(*) as ptotal from pendaftar");
 $total=mysql_fetch_assoc($totpendaftar);

 $seleksi=mysql_query("select count(*) as ptahapan from pendaftar where statusdaftar='tahap seleksi'");
 $tahap=mysql_fetch_assoc($seleksi);

 $ditolak=mysql_query("select count(*) as ptolak from pendaftar where statusdaftar='Ditolak'");
 $tolak=mysql_fetch_assoc($ditolak);

 $diterima=mysql_query("select count(*) as pterima from pendaftar where statusdaftar='Diterima'");
 $terima=mysql_fetch_assoc($diterima);
 
 //tingkatpenerimaanprodi
 $si=mysql_query("select count(*) as siu from pendaftar where kdtk='T001'");
 $sip=mysql_fetch_assoc($si);

 $ti=mysql_query("select count(*) as tiu from pendaftar where kdtk='T002'");
 $tip=mysql_fetch_assoc($ti);

 $sk=mysql_query("select count(*) as sku from pendaftar where kdtk='T003'");
 $skp=mysql_fetch_assoc($sk);

 $ak=mysql_query("select count(*) as aku from pendaftar where kdtk='T004'");
 $akp=mysql_fetch_assoc($ak);
?>
<!DOCTYPE html>

<html lang="en"><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Pendaftaran Online</title>
	<meta name="description" content="Srikandi Responsive Admin Templates">
	<meta name="keywords" content="resposinve, admin dashboard, admin page, admin template">
	<meta name="author" content="Candra Dwi Waskito">
	<link rel="shortcut icon" href="http://bootemplates.com/themes/srikandi/favicon.ico">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/bootstrap-reset.css">
    <link href="./Srikandi - Responsive Admin Templates_files/css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/style.css">
    <script src="./Srikandi - Responsive Admin Templates_files/jquery-1.11.1.min.js"></script>
    <!-- css for this page -->
    <link href="./Srikandi - Responsive Admin Templates_files/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./Srikandi - Responsive Admin Templates_files/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="./Srikandi - Responsive Admin Templates_files/owl.transitions.css">
</head>
<body>

    <!-- start:wrapper -->
    <div id="wrapper">
        <div class="header-top">
            <!-- start:navbar -->
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="container">
                    <!-- start:navbar-header -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"><i class="fa fa-home" data-original-title="" title=""></i> <strong>Pendaftaran</strong></a>
                    </div>
                    <!-- end:navbar-header -->
                    <ul class="nav navbar-nav navbar-left top-menu">
                        <!-- start dropdown 1 -->
                  
                        <!-- end dropdown 3 -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-menu">
                        <li>
                            <input type="text" class="form-control input-sm search" placeholder="Search">
                        </li>
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="./Srikandi - Responsive Admin Templates_files/avatar-mini3.jpg">
                                <span class="username"><?php echo $username ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <div class="log-arrow-up"></div>
                                
                                <li><a href="logout.php"><i class="fa fa-key" data-original-title="" title=""></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end:navbar -->
        </div>
        <!-- start:header -->
        <div id="header">
            <div class="overlay">
                <nav class="navbar" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <strong>MENU</strong>
                            </button>
                        </div>
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="./">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Home
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a class="" data-toggle="" href="?p=agama">
                                        <div class="text-center">
                                            <i class="fa fa-laptop fa-3x" data-original-title="" title=""></i><br>
                                            Data Agama 
                                        </div>
                                    </a>
                                 
                                </li>
                            
                                <li class="dropdown">
                                    <a  href="?p=tk">
                                        <div class="text-center">
                                            <i class="fa fa-bar-chart-o fa-3x" data-original-title="" title=""></i><br>
                                            Data Asal Tk
                                        </div>
                                    </a>
                                 
                                </li>
                                <li>
                                    <a href="?p=pendaftar">
                                        <div class="text-center">
                                            <i class="fa fa-location-arrow fa-3x" data-original-title="" title=""></i><br>
                                            Pendaftar
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a  href="?p=seleksi">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Seleksi Pendaftar 
                                        </div>
                                    </a>
                                  
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                        <div class="text-center">
                                            <i class="fa fa-shopping-cart fa-3x" data-original-title="" title=""></i><br>
                                            Data OrangTua <span class="caret"></span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="?p=pekerjaan"><i class="fa fa-gift" data-original-title="" title=""></i>  Data Pekerjaan</a></li>
                                        <li><a href="?p=pendidikan"><i class="fa fa-gift" data-original-title="" title=""></i> Data Pendidikan</a></li>
                                   
                                    </ul>
                                </li>
                                   <li class="dropdown">
                                    <a  href="?p=laporan">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Laporan Pendaftaran 
                                        </div>
                                    </a>
                                  
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- end:header -->

        <!-- start:main -->
        <div class="container">
            <div id="main">
                <!-- start:breadcrumb -->

       
          <?php
            if(isset($_GET['p'])){
            if($_GET['p']=="agama")
              include "page/agama.php";
         elseif($_GET['p']=="tk")
              include "page/tk.php";
            elseif($_GET['p']=="pekerjaan")
              include "page/pekerjaan.php";
          elseif($_GET['p']=="pendidikan")
              include "page/pendidikan.php";
               elseif($_GET['p']=="pendaftar")
              include "page/pendaftar.php";
           elseif($_GET['p']=="seleksi")
              include "page/seleksi.php";
            elseif($_GET['p']=="laporan")
              include "page/laporan.php";
            else
             echo "<blockquote><p>Halaman tidak ditemukan</p></blockquote>";
          }
          else
          {
            echo " <ol class='breadcrumb'>
                    <li><a href='./'>Home</a></li>
                    <li class='active'>Home</li>
                </ol>
                <!-- end:breadcrumb -->   

                <div class='row' id='home-content'>
                    <div class='col-lg-8'>
                        <!-- start:state overview -->
                        <div class='row state-overview'>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol terques'>
                                        <i class='fa fa-users' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class=''> ".$total['ptotal']." </h1>
                                        <p>Pendaftar</p>
                                    </div>
                                </section>
                            </div>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol red'>
                                        <i class='fa fa-check-circle-o' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class=' '>".$terima['pterima']."</h1>
                                        <p>Diterima</p>
                                    </div>
                                </section>
                            </div>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol yellow'>
                                        <i class='fa fa-close' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class=' '>".$tolak['ptolak']."</h1>
                                        <p>Ditolak</p>
                                    </div>
                                </section>
                            </div>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol purple'>
                                        <i class='fa fa-ellipsis-h' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class=' '>".$tahap['ptahapan']."</h1>
                                        <p>Tahap Seleksi</p>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- end:state overview -->

                        <!--custom chart start-->
                        <canvas id='bar-chart' width='800' height='450'></canvas>
                        <canvas id='doughnut-chart' width='800' height='450'></canvas>
                        <!--custom chart end-->
                      
                    
                    </div>
                    <div class='col-lg-4'>
                        <!-- start:user info -->
                        <div class='panel panel-default'>
                            <div class='panel-heading'>
                                <header class='panel-title'>
                                    <div class='text-center'>
                                        <strong>Profile</strong>
                                    </div>
                                </header>
                            </div>
                            <div class='panel-body'>
                                <div class='text-center' id='author'>
                                    <img src='./Srikandi - Responsive Admin Templates_files/avatar-mini3.jpg'>
                                    <h3>ADMIN</h3>
                                    <small class='label label-warning'>Administrator Web</small>
                                    <p>Wellcome back admin, Selamat Bekerja Kembali</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end:user info -->
                
                        <!-- end:total earning -->

                        <!-- start:user info table -->
                     
                        <!-- end:user info table -->
                    </div>
                </div>";
          }
          ?>
               

               
            </div>
        </div>
        <!-- end:main -->

        <!-- start:footer -->
      
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-widget">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                            <span class="sosmed-footer">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github"></i></a>
                            </span>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="footer-bottom-links">
                                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:footer -->

    </div>
    <!-- end:wrapper -->

	<!-- start:javascript -->
	<!-- javascript default for all pages-->
	
	<script src="./Srikandi - Responsive Admin Templates_files/bootstrap.min.js"></script>

    <!-- javascript for Srikandi admin -->
    <script src="./Srikandi - Responsive Admin Templates_files/themes.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.scrollTo.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.nicescroll.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.sparkline.js" type="text/javascript"></script>
    <script class="include" type="text/javascript" src="./Srikandi - Responsive Admin Templates_files/jquery.dcjqaccordion.2.7.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/respond.min.js"></script>
	<!-- end:javascript -->

    <!-- start:javascript for this page -->
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.easy-pie-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/owl.carousel.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.customSelect.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/sparkline-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/easy-pie-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/count.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>

        // Bar chart
        new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
            labels: ["Diterima", "Ditolak", "Tahap Seleksi"],
            datasets: [
                {
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                data: [<?= $terima['pterima']?>,<?= $tolak['ptolak']?>,<?= $tahap['ptahapan']?>]
                }
            ]
            },
            options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Penerimaan Berdasar Tahap Seleksi'
            }
            }
        });

        //doughnut chart
        new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
            labels: ["Sistem Informasi", "Teknik Informatika", "Sistem Komputer", "Akuntansi"],
            datasets: [
            {
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                data: [<?= $sip['siu']?>,<?= $tip['tiu']?>,<?= $skp['sku']?>,<?= $akp['aku']?>]
            }
            ]
        },
        options: {
            title: {
            display: true,
            text: 'Data Penerimaan Berdasar Prodi'
            }
        }
        });

        //owl carousel
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
                autoPlay:true
            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

        if ($(".custom-bar-chart")) {
        $(".bar").each(function () {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }
    </script>
    <!-- end:javascript for this page -->

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnjzrXoIjx%2bGi07djBNw6V%2bk6IhW6Y%2bveWbfUbblHVaaQvAwuGR%2fd%2b%2fRi0q1uJwiB3quL%2fzKXi%2bTtDP7nRp1u393Bl1J91B8EXGn3%2b1WZWTAbf41MT3f%2f77iGqm05WK1gamkxhXwBJGH0bBk7i49%2bQ76N%2bV9F37FLNEjLlLn92tTqReVhWNTq4SNbmiotDbZmN5kYhNg9OqQlGXyAopKmVCmfsP7%2f9ZWOjMwZu3JImgF9%2fXdfJK49u1P6oe%2fefvRQ7vjfySKR6wY6bidmnWNX1np3O9pXqo7%2fa9uYucQcoweAj9pUmIitwMI34gJ6ISd2f2WIy7pmzQX5VisM89w5qSjPmi1lSUmcXjH7GFBDy89k6S2hQuCrtSc2qa%2bfvrQcwoqd00e8CBNtVSOeA9IvWdu85pb0R7%2bMh9PDxUIStndq4LMdZ7t68LGE5PH3NHH9R1rEf%2fB08BWTW5L3wtIbjOG18nNC4RpUWGitCA9QJk7HeAsMkqnLevBr7j%2b5wW%2fGSVkVKaaT6vVdl8wuKIAF81nH%2bHJfc9Bb%2bwRlRplyZ2LSDP2RwG8mSqEmNcDMAS2Do4w%2b7yQKRIt5KlKKMc5l5oxWc17nc203KSq2V5GfqoefoW%2fPKUIVjTPNVou%2f7uLI2vR26K0WZT6D5uvKLdOH%2bGWRXIrPmfadx33YaQePbsVY%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
	</body></html>