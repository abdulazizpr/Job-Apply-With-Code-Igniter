<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Ubah Password</title>
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

		<h1 align="center">Ganti Password</h1>			
		<?php 
			echo form_open('employers/proses_ubah_password');
			$password = array(
				'baru'=>array(
							'type'=>'password_baru',
							'name'=>'password_baru',
							'value'=> set_value('password_baru')
						),
				'c_baru'=>array(
							'type'=>'passconf',
							'name'=>'passconf',
							'value'=> set_value('passconf')
						)
			);

			$submit = array(
				'type'=>'submit',
				'name'=>'submit',
				'value'=>'Ganti Password',
				'class'=>'btn btn-primary'
			);

			$hidden = array(
				'type'=>'hidden',
				'name'=>'id_perusahaan',
				'value'=> $id_perusahaan
			);

			echo 'Password baru </br>'.form_password($password['baru']);
			echo form_error('password_baru', '<div style="color:red">','</div>').'</br>';
			echo 'Konfirmasi password baru</br>'.form_password($password['c_baru']);
			echo form_error('passconf', '<div style="color:red">','</div>').'</br></br>';
			echo form_input($hidden);
			echo form_submit($submit).'</br>';
			?>
			</form>
		</div>
	</div>

<br><br><br><br><br><br><br><br><br>

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
