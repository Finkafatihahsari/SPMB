<!DOCTYPE html>
<?php
  include "../koneksi.php";
  if(!isset($_SESSION))
  session_start();
 
  if(isset($_POST['username']) && isset($_POST['password']))
  {
      if(trim($_POST['username']==""))
      $errorusername="Isikan username";
      if(trim($_POST['password']=="" ))
      $errorpassword="Isikan password";
      if(trim($_POST['username']!="") && trim($_POST['password']!="" ))
      {
        $userpost=addslashes($_POST['username']);
        $passpost= addslashes($_POST['password']);

        $exec=mysql_query("select * from login where username='$userpost'");
        $r=mysql_fetch_array($exec);
        $userfield=$r[0];
        $passfield=$r[1];
      
        if(mysql_num_rows($exec)<>0)
        {
          if($passfield==($passpost))
          {
            $_SESSION['username']=$userpost;
            $_SESSION['nama']=$r['nama'];
            $_SESSION['udahlogin']="Y";
            header("location:index.php");
          }
          else
          {
            $errorall="Login gagal!";
          }
        }
        else
          $errorall="Login gagal!";
      }
  }
  
  
?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	</head>

	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="white" id="id-text2">PENDAFTARAN ONLINE</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; UNIVERSITAS</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												Login Admin
											</h4>

											<div class="space-6"></div>

											<form action="" method="post">
												<fieldset>
												  <span class="error" style="color:red"><?php  if(isset($_GET['code'])) echo "Anda berhasil logout!" ?><?php  if(isset($errorall)) echo $errorall ?><?php  if(isset($errorusername)) echo "* ".$errorusername ?></span>
            
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="username" placeholder="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
														<span class="error" style="color:red"><?php if(isset($errorpassword)) echo "* ".$errorpassword ?></span>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
													

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

									
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="../"  class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													Kembali Ke Beranda
												</a>
											</div>

										
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<script src="assets/js/jquery.2.1.1.min.js"></script>

	</body>
</html>
