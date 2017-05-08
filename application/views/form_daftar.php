<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Daftar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/font/css/font-awesome.min.css');?>" />

	<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap.min.css')?>" rel="stylesheet" type='text/css'/>

	<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap-responsive.min.css')?>" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url ('assets/css_ori/css_template/css/font-awesome.css')?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
	<link href="<?php echo base_url ('assets/css_ori/css_template/css/style3.css')?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url ('assets/css_ori/css_template/css/pages/signin.css')?>" rel="stylesheet" type="text/css">

	
	<style type="text/css">
		#disableClick{
    		pointer-events: none;
    	}
	</style>

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
			
			<div id ="disableClick">
			<a class="brand" href="index.html">
				<?php echo $header?>				
			</a>
			</div>		
			
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
		
		<?php echo form_open($action)?>
		
			<h1>Sign Up for <?php echo $header;?></h1>			
			
			<div class="login-fields">

				<div class="field">
					<label for="firstname">First Name:</label>
					<input type="text" placeholder ="<?php echo $nama;?>" name="<?php echo $data['nama'];?>" value="<?php echo set_value($data['nama'])?>"/> 
					<?php echo form_error($data['nama'], '<div style="color:red">','</div>');?>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Email:</label>	
					<input type="email" placeholder ="Alamat E-mail"  name="<?php echo $data['email'];?>" value="<?php echo set_value($data['email'])?>"/>
					<?php echo form_error($data['email'], '<div style="color:red">','</div>');?>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" placeholder="Password" name="<?php echo $data['password'];?>" value="<?php echo set_value($data['password']);?>"/> 
					<?php echo form_error($data['password'], '<div style="color:red">','</div>');?>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="confirm_password">Confirm Password:</label>
					<input type="password" placeholder ="Konfirmasi Password"name="passconf" value="<?php echo set_value('passconf')?>"/> 
					<?php echo form_error('passconf', '<div style="color:red">','</div>');?>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">					
				<input  type="hidden" name="level" value="<?php echo $data['level'];?>"/>
				<input class ="button btn btn-primary btn-large" type="submit" name="daftar" value="Daftar" />
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="<?php echo site_url('login')?>">Login to your account</a>
</div> <!-- /login-extra -->


<br><br><br>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2015 <a href="<?php echo site_url('login')?>">Good Job</a>. </div>
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