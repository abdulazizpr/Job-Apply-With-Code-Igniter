<!DOCTYPE html>
<html>
	<head>
		<title>Posting Lowongan</title>
		<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js');?>"></script> 
		<!-- include libraries BS3 -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" />
		<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
		<link rel="stylesheet" href="<?php echo base_url('assets/font/css/font-awesome.min.css');?>" />
		<link rel="shortcut icon" href="<?php echo base_url ('assets/css_ori/images/img/logo.png')?>">
	  
		<!-- include summernote css/js-->
		<link href="<?php echo base_url('assets/summernote/summernote.css');?>"  rel="stylesheet">
		<script src="<?php echo base_url('assets/summernote/summernote.min.js');?>"></script>
		<script>
			$(document).ready(function() {
				$('#summernote').summernote({
					height: 500
				});
			});
		</script>

		<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap.min.css')?>" rel="stylesheet" type='text/css'/>
	
		<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap-responsive.min.css')?>" rel="stylesheet" type="text/css" />

		<link href="<?php echo base_url ('assets/css_ori/css_template/css/font-awesome.css')?>" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
		<link href="<?php echo base_url ('assets/css_ori/css_template/css/style.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url ('assets/css_ori/css_template/css/pages/signin.css')?>" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<body>
	
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar">
          </span><span class="icon-bar"></span>
            <span class="icon-bar"></span>
              </a><a class="brand" href="index.html"> <h2 align="center">Posting Lowongan</h2>	</a>
			
			
			
			<div class="nav-collapse">
				
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->

<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li ><a href="<?php echo site_url('login')?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class="active"><a href="<?php echo site_url('employers/posting_lowongan');?>"><i class="icon-paper-clip"></i><span>Posting Lowongan</span> </a> </li>
        <li><a href="#"> <i class="icon-list-alt"></i><span>Lihat Pelamar</span></a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>


		<br>
		<form action="<?php echo site_url($action)?>" method="POST" enctype="multipart/form-data">
				
			<fieldset>
				<div class="container">
					Judul :<br>
					<input type="text"  name="judul" value="<?php if($header=='Edit Posting')echo $posting->judul;else set_value('id_kategori');?>">
					</br>
					</br>
					<?php
						$data = array(
							"" => "-Pilih kategori-"
						);
						foreach($kategori as $row){
							$data[$row->id_kategori] = $row->nama_kategori;
						}
						if($header=='Edit Posting'){
							$isi=$posting->id_kategori;
						}else{
							$isi=set_value('id_kategori');
						}
						echo form_dropdown('id_kategori', $data,$isi);
					?>
					</select>
					</br>
					</br>
					isi konten :
					<div class="row">
						<textarea class="input-block-level" id="summernote" name="konten" ><?php if($header=='Edit Posting') echo $posting->konten; else set_value('konten');?></textarea>
					</div>
					</br>
					<input type="hidden" name="id_posting" value="<?php if($header=='Edit Posting') echo $posting->id_posting; else echo set_value('id_posting'); ?>
					" />
					<center><input type="submit" class="btn-large btn-primary" name="posting" value="Submit"></center>
					</br>
					</br>
					</br>
					
				</div>
			</fieldset>
			
		</form>

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
	</body>
</html>