<?php
include "koneksi.php";
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
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="./" style="color:red">
				<marquee>	Website Pendaftaran <span class="fa fa-facebook"></span></marquee></a> 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1 "><a href="./"><span class="fa fa-home"></span> Home</a></li>
					<li class="c2 active"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>
					<li class="c3"><a href="pendaftaran.php"><span class="fa fa-pencil"></span> Pendaftaran</a></li>
					
				
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
							<!-- <h1 class="animated flipInY delay1">Pendaftaran Online</h1> <br/> -->
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
  <ol class='breadcrumb'>
                   
                </ol>
                <!-- end:breadcrumb -->   

                <div class='row' id='home-content'>
                    <div class='col-lg-12'>
           <script type="text/javascript">
    $(document).ready(function(){
        
    $("body").on("click", "#tambah",function(e){
        $('#area-loading').html(''); 
        $("#kdpendaftar").removeAttr('readonly')
        $('#kdpendaftar').val('');
        $('#nama').val('');
        $('#jenkel').val('');
        $('#kdagama').val('');
        $('#tpt_lahir').val('');
        $('#tgl_lahir').val('');
        $('#alamat').val('');
        $('#statusanak').val('');
        $('#nmayah').val('');
        $('#kdpendidikana').val('');
        $('#kdpekerjaana').val('');
        $('#penghasilanayah').val('');
        $('#nmibu').val('');
        $('#kdpendidikani').val('');
        $('#kdpekerjaani').val('');
        $('#nohp').val('');
        $('#kdtk').val('');
        $('#statusdaftar').val('');

        $(".edit-dialog").modal('toggle');
    })
  $("body").on("click", ".hapus", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = ".data-0-"+clickedID[1];
                $(".kdpendaftar").html($(DbNumberID).html());
                $('.dialog-hapus').modal('toggle');
                $("#konf").attr("href","hapusdaftar.php?kdpendaftar="+$(DbNumberID).html());
            });

    $("body").on("click", ".edit", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = clickedID[1];
                var kelas1 = ".data-0-"+DbNumberID;
                var kelas2 = ".data-1-"+DbNumberID;
                var kelas3 = ".data-2-"+DbNumberID;
                var kelas4 = ".data-3-"+DbNumberID;
                var kelas5 = ".data-4-"+DbNumberID;
                var kelas6 = ".data-5-"+DbNumberID;
                var kelas7 = ".data-6-"+DbNumberID;
                var kelas8 = ".data-7-"+DbNumberID;
                var kelas9 = ".data-8-"+DbNumberID;
                var kelas10 = ".data-9-"+DbNumberID;
                var kelas11 = ".data-10-"+DbNumberID;
                var kelas12 = ".data-11-"+DbNumberID;
                var kelas13 = ".data-12-"+DbNumberID;
                var kelas14 = ".data-13-"+DbNumberID;
                var kelas15 = ".data-14-"+DbNumberID;
                var kelas16 = ".data-15-"+DbNumberID;
                var kelas17 = ".data-16-"+DbNumberID;
                var kelas18 = ".data-17-"+DbNumberID;

                var kdpendaftar = $(kelas1).html();
                var nama = $(kelas2).html();
                var jenkel = $(kelas3).html();
                var kdagama = $(kelas4).html();
                var tpt_lahir = $(kelas5).html();
                var tgl_lahir = $(kelas6).html();
                var alamat = $(kelas7).html();
                var statusanak = $(kelas8).html();
                var nmayah = $(kelas9).html();
                var kdpendidikana = $(kelas10).html();
                var kdpekerjaana = $(kelas11).html();
                var penghasilanayah = $(kelas12).html();
                var nmibu = $(kelas13).html();
                var kdpendidikani = $(kelas14).html();
                var kdpekerjaani = $(kelas15).html();
                var nohp = $(kelas16).html();
                var kdtk = $(kelas17).html();
                var statusdaftar = $(kelas18).html();
                $("#kdpendaftar").val(kdpendaftar);
                $("#nama").val(nama);
                $("#kdpendaftar").attr("readonly","true");
                $('.edit-dialog').modal('toggle');
            });

    })
</script>
<form id="cetak" action="fpdf/examples/print.php" method="post">
    <input type="hidden" name="isi" id="isi" value=""><input type="hidden" name="namafile" value="hakakses">
</form>
<div class="modal fade bs-example-modal-lg dialog-hapus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4>Hapus Data</h4>
        </div>
        <div class="modal-body">
            Apakah anda ingn menghapus data dengan kode pendaftar =  <span class='kdpendaftar'></span>?
        </div>
        <div class="modal-footer">
        <a id="konf" href=""><button type="button" class="btn btn-danger" id="simpan">Ya</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg edit-dialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data pendaftar</h4>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="post" id="form" action="insertpendaftar.php">
        <table class="table table-striped" width="100%">
            <tr>
                <th width="25%">kode pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="kdpendaftar" name="kdpendaftar" placeholder="Kode" class="form-control" type="text" required></td>
            </tr><tr>
                <th width="25%">Nama pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" placeholder="Nama" class="form-control" type="text" required ></td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jenkel" name="jenkel"  class="form-control" required >
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </td>
            </tr>
            <tr>
            <th width="25%">No. Pelanggan Terdekat</th>
            <td width="1%"> : </td>
            <td><select id="no_pelanggan_terdekat" name="no_pelanggan_terdekat"   class="form-control">
              <option>--Pilih Pelanggan--</option>
              <?php
                $exec=mysql_query("select * from pelanggan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'>$hasil[0] | $hasil[2]</option>";
              ?>
            </select></td>
          </tr>
        </table>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
      </div>
    </div>
  </div>
</div>

    <?php
        if(isset($_GET['code']))
        {
            if($_GET['code']==1)
                echo "<h3 style='color:green'>Data pendaftar berhasil disimpan</h3>";
            elseif($_GET['code']==2)
                echo "<h3 style='color:red'>Terjadi kesalahan</h3>";
            elseif($_GET['code']==3)
                echo "<h3 style='color:blue'>Data pendaftar berhasil dihapus</h3>";
        }
    ?>
    <center><h3 style="color: red">PENGUMUMAN HASIL SELEKSI PENDAFTARAN <span class='fa fa-user'></span></h3></center>
    <center><h1 style="color: green">*) bagi Pendaftar Yang telah diterima agar segera melakukan Registasi Ulang ke Kampus<span class='fa fa-user'></span></h1></center>
<table class="table table-striped">
    <tr>
        <th width="5%">
            No.
        </th>
      
        <th>
            Nama pendaftar
        </th>
     <th>
            Jenis kelamin
        </th>
         <th>
            Status
        </th>
        <th>
        </th>
    </tr>
    <?php
        if(!isset($_GET['data']))
        $exec=mysql_query("select * from pendaftar ");
        else{
            $data=trim(addslashes($_GET['data']));
            $exec=mysql_query("select * from pendaftar where kdpendaftar like '%".$data."%' or nama like '%".$data."%'");
        }
            
        $no=0;
        while($r=mysql_fetch_array($exec))
        
        {
            $no++;

    ?>
    <tr>
        <td width="5%">
            <?php echo $no; ?>
        </td>
     
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[1]; ?></span>
        </td>
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[2]; ?></span>
        </td>
         <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[17]; ?></span>
        </td>
        
    
        <td>
           
         </a>&nbsp;<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $r[0]; ?>">Detail</button>

 <div class="modal fade bs-example-modal-lg<?php echo $r[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped" width="100%">
          <tr>
            <th width="25%">Nama</th>
            <td width="1%"> : </td>
            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span></td>
          </tr><tr>
            <th width="25%">Jenis Kelamin</th>
            <td width="1%"> : </td>
            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r[2]; ?></span></td>
          </tr><tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r[3]; ?></span></td>
          </tr><tr>
            <th width="25%">Tempat Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span></td>
          </tr><tr>
            <th width="25%">Tanggal Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span></td>
          </tr>  <tr>
            <th width="25%">Asal Tk</th>
            <td width="1%"> : </td>
            <td> Rp. <?php echo $r[16]; ?></td>
          </tr><tr>
            <th width="25%">Alamat</th>
            <td width="1%"> : </td>
            <td> <span class="data-5-<?php echo $r[0]; ?>"><?php echo $r[6]; ?></span></td>
          </tr><tr>
            <th width="25%">Status Anak</th>
            <td width="1%"> : </td>
            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span></td>
          </tr><tr>
            <th width="25%">Nama Ayah</th>
            <td width="1%"> : </td>
            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span></td>
          </tr><tr>
            <th width="25%">Pendidikan Ayah</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[9]; ?></td>
          </tr>
          <tr>
            <th width="25%">Pekerjaan ayah Ayah</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[10]; ?></td>
          </tr>
          <tr>
            <th width="25%">Penghasilan Ayah</th>
            <td width="1%"> : </td>
            <td> Rp. <?php echo $r[11]; ?></td>
          </tr>
          <tr>
            <th width="25%">Nama Ibu</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[12]; ?></td>
          </tr>
          <tr>
            <th width="25%">Pendidikan Ibu</th>
            <td width="1%"> : </td>
            <td>  <?php echo $r[13]; ?></td>
          </tr>
          <tr>
            <th width="25%">Pekerjaan Ibu</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[14]; ?></td>
          </tr>
          <tr>
            <th width="25%">No Hp</th>
            <td width="1%"> : </td>
            <td> <?php echo $r[15]; ?></td>
          </tr>
        
      
      
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        </td>
    </tr>
    <?php
        }
    ?>

</table>
                    
                    </div>
                 
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
