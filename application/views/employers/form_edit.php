<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Edit Profil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/font/css/font-awesome.min.css');?>" />


	<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap.min.css')?>" rel="stylesheet" type='text/css'/>
	
	<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap-responsive.min.css')?>" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url ('assets/css_ori/css_template/css/font-awesome.css')?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
	<link href="<?php echo base_url ('assets/css_ori/css_template/css/style.css')?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url ('assets/css_ori/css_template/css/pages/signin.css')?>" rel="stylesheet" type="text/css">

	<link rel="shortcut icon" href="<?php echo base_url ('assets/css_ori/images/img/logo.png')?>">
</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>	
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="<?php echo site_url('login')?>" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	<div class="content clearfix">
		<h1 align="center">Edit Employers</h1>			
		<form action="<?php echo site_url('employers/proses_edit_employers');?>" method="POST" enctype="multipart/form-data">

		<table align="center">
		<tr>
			<td>Nama Perusahaan</td>
			<td>:</td>
			<td> <input type="text" name="nama_perusahaan" value="<?php echo $employers->nama_perusahaan;?>" /> </td>
		</tr>
		<tr>
			<td>Logo Perusahaan</td>
			<td>:</td>
			<td> <input type="file" name="userfile" value="<?php echo $employers->logo_perusahaan?>" size="20"/> </td>
		</tr>
		<tr>
			<td>Alamat Perusahaan</td>
			<td>:</td>
			<td><textarea name="alamat_perusahaan"><?php echo $employers->alamat_perusahaan;?></textarea></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td> <input type="email" name="email" value="<?php echo $employers->email;?>"/> </td>
		</tr>
		<tr>
			<td>Jenis Usaha</td>
			<td>:</td>
			<td> <input type="text" name="jenis_bidang_usaha" value="<?php echo $employers->jenis_bidang_usaha;?>" /> </td>
		</tr>
	</table>
		<a class="btn btn-warning" href="<?php echo site_url('employers/ubah_password/'.$employers->id_perusahaan);?>">Ubah Password</a>
		<input class="btn btn-primary" type="submit" value="Simpan" />
	</form>
	</div>
</div>
<br><br><br><br>

<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2015 <a href="http://www.egrappler.com/">Good Job</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 

<script src="<?php echo base_url ('assets/css_ori/css_template/js/jquery-1.7.2.min.js')?>"></script>
<script src="<?php echo base_url ('assets/css_ori/css_template/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url ('assets/css_ori/css_template/js/signin.js')?>"></script>
</body>

 </html>
