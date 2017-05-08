<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard | Employers</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap.min.css')?>" rel="stylesheet" type='text/css'/>
  <link href="<?php echo base_url ('assets/css_ori/css_template/css/bootstrap-responsive.min.css')?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/font/css/font-awesome.min.css');?>" />

  <link href="<?php echo base_url ('assets/css_ori/css_template/css/font-awesome.css')?>" rel="stylesheet">

  <link href="<?php echo base_url ('assets/css_ori/css_template/css/pages/dashboard.css')?>" rel="stylesheet" type="text/css">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
  <link href="<?php echo base_url ('assets/css_ori/css_template/css/style.css')?>" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" href="<?php echo base_url ('assets/css_ori/images/img/logo.png')?>">

  <style type="text/css">
    #disableClick{
        pointer-events: none;
      }
  </style>

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.2.min.js')?>"></script>
    <script language="javascript">
            $(function(){
        $('a#delete_posting').click(function(){
        if(confirm('Apakah yakin ingin dihapus?')){
          return true;
        }else{
          return false;    
        }
        });
      });
    </script>

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
              </a><div id ="disableClick"><a class="brand" href="index.html">Selamat Datang <?php echo $employers->nama_perusahaan;?> </a></div>
        <div class="nav-collapse">
          <ul class="nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $employers->nama_perusahaan;?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('employers/edit_employers/'.$employers->id_perusahaan);?>">Edit Profile</a></li>
              <li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
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
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="<?php echo site_url('employers/posting_lowongan');?>"><i class="icon-paper-clip"></i><span>Posting Lowongan</span> </a> </li>
        <li><a href="#"> <i class="icon-list-alt"></i><span>Lihat Pelamar</span></a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>


<!--Main Menu-->

<div class="main">
    <div class="container">
      <div class="row">
         <?php
        if($posting){
        foreach($posting as $row){?>
        <div class="span6">
          <div class="widget-content">



            <h1>
                <img src="<?php if($employers->logo_perusahaan) echo base_url('uploads/'.$employers->logo_perusahaan);?>" width="90" height="100"/></h1>
                    
                      <a href="<?php echo site_url('employers/read_more/'.$row->id_posting);?>"><h3><?php echo $row->judul;?></h3></a>
                      <p>Kategori : <?php echo $row->nama_kategori;?></p>
                      <p>Tanggal : <?php echo $row->tgl_posting;?></p>
                      </br>
                
                      <div class="span2">
                        <div class="widget">
                          <div class="widget-content">
                       <a class="btn btn-primary" href="<?php echo site_url('employers/edit_posting/'.$row->id_posting);?>">Edit</a> 
                      <a  class="btn btn-danger" id="delete_posting" href="<?php echo site_url('employers/delete_posting/'.$row->id_posting);?>">Delete</a>
                       <!-- <a href="<?php echo site_url('employers/read_more/'.$row->id_posting);?>">Baca Selanjutnya</a>  -->
                        </div> <!-- /widget-content -->
                      </div> <!-- /widget -->
                    </div> <!-- /span3 -->
          </div>

          <br>
        </div> 
        <?php
    }
  }else{
?>
<p align="center"><i style="color:grey;font-weight=italic;" align="center">Tidak ada posting</i></p>
<?php
  }
?>
      </div>
      
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


<!-- Placed at the end of the document so the pages load faster --> 
<link href="<?php echo base_url ('assets/css_ori/css_template/css/font-awesome.css')?>" rel="stylesheet">
<script src="<?php echo base_url ('assets/css_ori/css_template/js/jquery-1.7.2.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/css_ori/css_template/js/excanvas.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/css_ori/css_template/js/chart.min.js')?>" type="text/javascript"></script> 
<script src="<?php echo base_url ('assets/css_ori/css_template/js/bootstrap.js')?>"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
        {
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
      ]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
        {
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
      ]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->

</body>
</html>