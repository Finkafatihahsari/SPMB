<?php
include "koneksi.php";
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
                                header("location:./berhasil.php");

                  }
              ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>SPMB</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="./" style="color:red">
				<marquee>	SPMB <span class="fa fa-facebook"></span></marquee></a> 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1"><a href="./"><span class="fa fa-home"></span> Home</a></li>
					<li class="c2"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>
					<li class="c3 active"><a href="pendaftaran.php"><span class="fa fa-pencil"></span> Pendaftaran</a></li>
					
				
					<li class="c7"><a href="admin"><span class="fa fa-lock"></span> Login</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">Pendaftaran Online</h1> <br/>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/unnar1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/unnar2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/unnar3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

  <div class="container">
    <div class="row">
			
					<div class="col-md-12">
						<div class="grey-box-icon b4">  
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
            <th width="25%">Prodi</th>
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
        *) Jika anda Anda bingung harap meminta bantuan Panitia PMB <br>
        *) Dengan Mengisi semua form anda akan menjadi Calon Mahasiswa dan akan menunggu beberapa hari untuk pengumuman hasil seleksi

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        
            </form>
						</div><!--grey box -->
					</div><!--/span3-->
				</div>
    </div>
      <section class="news-box top-margin">
     
    </section>
   
  
	
     
      
    	 
    <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">

    <div class="col-md-12 col-sm-7"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Hubungi Kami Jika ada Masalah</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Universitas x Surabaya<br>
            <i class="fa fa-phone"></i>+81262612222 <br>
            <i class="fa fa-envelope-o"></i> Universitas@univ.ac.id
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-pencil"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

				

					<div class="col-md-12 panel">
						<div class="panel-body">
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
