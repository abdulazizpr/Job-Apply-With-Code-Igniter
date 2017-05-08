<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard | Employe</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap.min.css')?>" rel="stylesheet" type='text/css'/>
  <link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap-responsive.min.css')?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/font/css/font-awesome.min.css');?>" />

  <link href="<?php echo base_url ('assets/css_ori/css_template/css/font-awesome.css')?>" rel="stylesheet">

  <link href="<?php echo base_url ('assets/css_ori/css_template/css/pages/dashboard.css')?>" rel="stylesheet" type="text/css">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
  <link href="<?php echo base_url ('assets/css_ori/css_template/css/style2.css')?>" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" href="<?php echo base_url ('assets/css_ori/images/img/logo.png')?>">

  <style type="text/css">
    #disableClick{
        pointer-events: none;
      }
  </style>


<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form.js');?>"></script>
<!-- All the jQuery event are writen in custom.js file -->
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<style>
form { 
	display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px 
}

#progress { 
	position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; 
}

#bar { 
	background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; 
}

#percent { 
	position:absolute; display:inline-block; top:3px; left:48%; 
}

.hide{display:none;}
</style>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>


<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar">
          </span><span class="icon-bar"></span>
            <span class="icon-bar"></span>
              </a><div id ="disableClick">
<a class="brand" href="index.html">Selamat Datang <?php echo $employee->nama_lengkap;?></a></div>
        <div class="nav-collapse">
          <ul class="nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $employee->nama_lengkap;?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('employee/edit_profil/'.$employee->id_employee);?>">Edit Profile</a></li>
              <li><a href="<?php echo site_url('login/logout');?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>

<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="<?php echo site_url('employee');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
		
        <li  class="active"><a href="<?php echo site_url('upload/upload_cv/'.$employee->id_employee);?>"><i class=" icon-edit"></i> <span>Posting CV</span></a> </li>
		
		<li><a href="<?php echo base_url('web/viewer.html?file=').base_url('uploads/'.$employee->cv);?>"><i class=" icon-folder-open "></i> <span>Lihat CV</span></a> </li>
		
        <li><a href="<?php echo site_url('employers/posting_lowongan');?>"> <i class="icon-tasks"></i><span>Lihat Status</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>


<!--Main Menu-->

<!--Main Menu-->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          
            <div class="widget-header"> <i class=" icon-file"></i>
              <h3>Upload CV</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
              	
              	<h1></h1>
					<?php echo $error['error'];?>
					<form id="myForm" action="<?php echo site_url('upload/proses_upload');?>" method="post" enctype="multipart/form-data">
						 <input id="file" type="file" size="60" name="userfile">
						 <input name="id_employee" type="hidden" value="<?php echo $employee->id_employee;?>">
						 <input id="submit" type="submit" value="Upload" disabled="disabled">
					 </form>
					 
					 <div id="progress" class="hide">
						<div id="bar"></div>
						<div id="percent">0%</div >
					</div>
					 <br>
					 <div id="message"></div>
					<br><br><br><br><br><br><br><br>
                </div>
                <!-- /widget-content --> 
                
              </div>
         
          </div>
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
</div>


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