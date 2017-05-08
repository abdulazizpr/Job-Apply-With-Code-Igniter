<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Good Job</title>
	<link media="all" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css_ori/css/all.css')?>"/>

	<script type="text/javascript" src="<?php echo base_url('assets/css_ori/js/jquery-1.7.1.min.js')?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/css_ori/js/jquery.main.js')?>"></script>

	<style type="text/css">
		#disableClick{
    		pointer-events: none;
    	}
	</style>

	<link rel="shortcut icon" href="<?php echo base_url ('assets/css_ori/images/img/logo.png')?>">
</head>
<body>
	<div id="header">
		<div class="wrapper">
			<div class="holder">
				<div id ="disableClick"><h1 class="logo"><a href="#">JobBoard</a></h1></div>
				<div class="login-block">
					<span class="sign"><span>Sign in</span></span>
						<fieldset>			
							<?php echo form_open($action,array('class'=>'sign-form'));?>
							<p style="color:red"><?php echo $message;?><p>
								<div class="row">
									<span class="text">
										<?php
											$email = array(
												'type'=>'email',
												'name'=>'email',
												'placeholder'=>'username',
												'value'=>set_value('email'),
											);
											
											echo form_input($email);
										?>
									</span>
									<span class="text">
										<?php
											$password = array(
												'type'=>'password',
												'name'=>'password',
												'placeholder'=>'password',
												'value'=>set_value('password'),
											);
											
											echo form_password($password);
										?>
									</span>

									<input type="submit" value="Go" class="submit" name="submit"/>

								</div>
					
										<td><?php echo form_error('email', '<div style="color:red">','</div>');?></td>
			
										</td>
										<td><?php echo form_error('password', '<div style="color:red">','</div>');?></td>
									</tr>
									<tr>
										<td>Login sebagai</td>
										<td>:</td>
										<td>
											<input type="radio" name="level" value="employers" checked>Employers
											<input type="radio" name="level" value="employee">Employee
										</td>
										<td><?php echo form_error('level', '<div style="color:red">','</div>');?></td>
									</tr>
									<tr>
							</form>
							<p>Daftar sebagai <a href="<?php echo site_url('login/daftar_employers');?>">Employers</a> atau <a href="<?php echo site_url('login/daftar_employee');?>">Employee</a></p>
						</fieldset>
					</form>
				</div>
			</div>
			<ul id="nav">
				<li><a href="http://www.hipwee.com/tips/7-nasihat-karir-untuk-mereka-yang-belum-mengarungi-dunia-kerja/" target="_blank">Career advice</a></li>
				<li><a href="<?php echo site_url('login/faq');?>">FAQ</a></li>
			</ul>
		</div>
	</div>

	<!--Menu-->
	<div id="main">
		<div class="wrapper">
			<div id="content">

				<div class="block">
					<div class="holder">
						<div class="frame">
							<div class="title">
								<h2>Browse by<span>category</span></h2>
							</div>
							<div class="list-holder">
									<ul>
									<?php foreach($kategori as $row) {
										echo "<li>";
										echo "<a href='#'>".$row->nama_kategori."</a>";
										echo "</li>";
									}
									?>
									</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="sidebar">
				<div class="block">
					<div class="holder">
						<div class="frame">
							<div class="title">
								<h3>Find a<span>job</span></h3>
							</div>
							<div class="info-text">
								<label for="keyword">Enter keyword(s)</label>
								<span class="text">
									<input type="text" class="text" id="keyword" />
								</span>

								<div class="row">
									<input type="submit" value="Perform the search" class="submit" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="sidebar">
				<div class="block">
					<div class="holder">
						<div class="frame">
							<div class="title">
								<h3>Top<span>employers</span></h3>
							</div>
							<div class="area">
								<ul class="sponsors-list">
									
									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/sponsor-logo-01.jpg')?>" alt="image description" width="66" height="25" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/sponsor-logo-02.jpg')?>" alt="image description" width="66" height="47" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/sponsor-logo-03.jpg')?>" alt="image description" width="66" height="34" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/sponsor-logo-04.jpg')?>" alt="image description" width="66" height="34" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/sponsor-logo-05.jpg')?>" alt="image description" width="66" height="33" /></a></li></div>
								</ul>
								<ul class="partners-list">
									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/partner-logo-01.jpg')?>" alt="image description" width="84" height="21" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/partner-logo-02.jpg')?>" alt="image description" width="64" height="24" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/partner-logo-03.jpg')?>" alt="image description" width="56" height="32" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/partner-logo-04.jpg')?>" alt="image description" width="88" height="37" /></a></li></div>

									<div id ="disableClick"><li><a href="#"><img src="<?php echo base_url ('GoodJob/images/partner-logo-05.jpg')?>" alt="image description" width="74" height="18" /></a></li></div>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="footer">
		<div class="holder">
			<div class="info">
				<span class="copy"><h3>Copyright (c) 2015 </h3></span>
				<ul>
					<li><a href="#"><h3>Good Job</h3></a></li>
					<!-- <li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Disclaimer</a></li> -->
				</ul>
			</div>
			<!-- <ul class="footer-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Job seekers</a></li>
				<li><a href="#">Employers</a></li>
				<li><a href="#">Career Advice</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Newsletter</a></li>
				<li><a href="#">Contact</a></li>
			</ul> -->
		</div>
	</div>
</body>
</html>