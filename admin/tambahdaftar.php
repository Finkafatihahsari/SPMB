<?php
include "../koneksi.php";
                if(isset($_POST['nama'])){

                                $nama=addslashes($_POST['nama']);
                                $jenkel=addslashes($_POST['jenkel']);
                                $kdagama=addslashes($_POST['kdagama']);
                                $tpt_lahir=addslashes($_POST['tpt_lahir']);
                                $tgl_lahir=addslashes($_POST['tgl_lahir']);
                                $alamat=addslashes($_POST['alamat']);
                                $statusanak=addslashes($_POST['statusanak']);
                                $nmayah=addslashes($_POST['nmayah']);
                                $kdpendidikana=addslashes($_POST['kdpendidikana']);
                                $kdpekerjaana=addslashes($_POST['kdpekerjaana']);
                                $penghasilanayah=addslashes($_POST['penghasilanayah']);
                                $nmibu=addslashes($_POST['nmibu']);
                                $kdpendidikani=addslashes($_POST['kdpendidikani']);
                                $kdpekerjaani=addslashes($_POST['kdpekerjaani']);
                                $nohp=addslashes($_POST['nohp']);
                                $kdtk=addslashes($_POST['kdtk']);
                                $statusdaftar=addslashes($_POST['statusdaftar']);
                                mysql_query("insert into pendaftar values('','$nama','$jenkel','$kdagama','$tpt_lahir','$tgl_lahir','$alamat',
                                    '$statusanak','$nmayah','$kdpendidikana','$kdpekerjaana','$penghasilanayah','$nmibu','$kdpendidikani','$kdpendidikani','$nohp','$kdtk','$statusdaftar')");
                                header("location:./?p=pendaftar&code=1");

                  }
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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
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
                        <a class="navbar-brand" href="http://bootemplates.com/themes/srikandi/v2/index.html"><i class="fa fa-home" data-original-title="" title=""></i> <strong>Pendafta</strong>Ran<strong>.</strong></a>
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
                                <span class='fa fa-user'></span>
                                <span class="username">ADMIN</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <div class="log-arrow-up"></div>
                                <li><a href="#"><i class=" fa fa-suitcase" data-original-title="" title=""></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog" data-original-title="" title=""></i> Settings</a></li>
                                <li><a href="#"><i class="fa fa-bell-o" data-original-title="" title=""></i> Notification</a></li>
                                <li><a href="http://bootemplates.com/themes/srikandi/v2/login.html"><i class="fa fa-key" data-original-title="" title=""></i> Log Out</a></li>
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
                                    <a class="" data-toggle="" href="./?p=agama">
                                        <div class="text-center">
                                            <i class="fa fa-laptop fa-3x" data-original-title="" title=""></i><br>
                                            Data Agama 
                                        </div>
                                    </a>
                                 
                                </li>
                            
                                <li class="dropdown">
                                    <a  href="./?p=tk">
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
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="./?p=seleksi">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Seleksi Pendaftar 
                                        </div>
                                    </a>
                                  
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <div class="text-center">
                                            <i class="fa fa-shopping-cart fa-3x" data-original-title="" title=""></i><br>
                                            Data OrangTua <span class="caret"></span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="./?p=pekerjaan"><i class="fa fa-gift" data-original-title="" title=""></i>  Data Pekerjaan</a></li>
                                        <li><a href="./?p=pendidikan"><i class="fa fa-gift" data-original-title="" title=""></i> Data Pendidikan</a></li>
                                   
                                    </ul>
                                </li>
                                   <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="./?p=laporan">
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

       
         <h4 class="modal-title" id="myModalLabel">Tambah Data pendaftar</h4>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="post">
        <table class="table " width="100%">
          <tr>
                <th width="25%">Nama pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" placeholder="Nama" class="form-control" type="text" required style="color:red"></td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jenkel" name="jenkel"  class="form-control" required style="color:blue" >
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                </td>
            </tr>
            <tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td><select  name="kdagama"   class="form-control" required style="color:lime">
            
              <?php
                $exec=mysql_query("select * from agama");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
            <tr>
            <th width="25%">Asal Tk</th>
            <td width="1%"> : </td>
            <td><select  name="kdtk"   class="form-control" required style="color:pink">
            
              <?php
                $exec=mysql_query("select * from tk");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
            <tr>
                <th width="25%">Tempat Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tpt_lahir" name="tpt_lahir" placeholder="Tempat Lahir" class="form-control" type="text" required style="color:magenta" ></td>
            </tr>
            <tr>
                <th width="25%">Tanggal Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal LAhir" class="form-control"  type="date" required style="color:orange"></td>
            </tr>
            <tr>
                <th width="25%">Alamat</th>
                <td width="1%"> : </td>
                <td> <input id="alamat" name="alamat" placeholder="Alamat" class="form-control" type="textarea" required style="color:pink"></td>
            </tr>
            <tr>
                <th width="25%">Status Anak</th>
                <td width="1%"> : </td>
                <td> <select id="statusanak" name="statusanak"  class="form-control"  required >
                <option value="kandung">Kandung</option>
                <option value="Tiri">Tiri</option>


                </select></td>
            </tr>

            <tr>

                <th width="25%">Nama Ayah</th>
                <td width="1%"> : </td>
                <td> <input id="nmayah" name="nmayah" placeholder="Nama Ayah" class="form-control" type="text" required ></td>
            </tr>
              <tr>
            <th width="25%">Pendidikan Ayah</th>
            <td width="1%"> : </td>
            <td><select  name="kdpendidikana"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pendidikan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
           <tr>
            <th width="25%">Pekerjaan Ayah</th>
            <td width="1%"> : </td>
            <td><select  name="kdpekerjaana"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pekerjaan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
 <tr>

                <th width="25%">Penghasilan Ayah</th>
                <td width="1%"> : </td>
                <td> <input id="penghasilanayah" name="penghasilanayah" placeholder="Pengasilan Contoh : Rp.2.000.000" class="form-control" type="text" required ></td>
            </tr>
 <tr>

                <th width="25%">Nama Ibu</th>
                <td width="1%"> : </td>
                <td> <input id="nmibu" name="nmibu" placeholder="Nama Ibu" class="form-control" type="text" required ></td>
            </tr>
            <tr>
            <th width="25%">Pendidikan Ibu</th>
            <td width="1%"> : </td>
            <td><select  name="kdpendidikani"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pendidikan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
           <tr>
            <th width="25%">Pekerjaan Ibu</th>
            <td width="1%"> : </td>
            <td><select  name="kdpekerjaani"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pekerjaan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
          <tr>

                <th width="25%">No  Telepon</th>
                <td width="1%"> : </td>
                <td> <input id="nohp" name="nohp" placeholder="No telepon  Ibu/Ayah" class="form-control" type="text" required ></td>
            </tr>
            <input type="hidden" name="statusdaftar" value="tahap seleksi">
        </table>
        *) Foto Di Tempel sesudah anda mengisi semua form Dengan Benar dan Anda di terima dalam tahap seleksi <br>
        *) Jika anda Anda bingung harap meminta bantuan Panitia PSB <br>
        *) Dengan Mengisi semua form anda akan menjadi Calon siswa dan akan menunggu beberapa hari untuk pengumuman hasil seleksi

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        
            </form>
               

               
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
                            © 2014 <strong>Titin Ariska Sibarani</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="footer-bottom-links">
                                <a href="#">About <strong></strong></a>
                                <a href="#">: Website Pendaftaran Sekolah Dasar Negeri</a>
                         
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
    <script>
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