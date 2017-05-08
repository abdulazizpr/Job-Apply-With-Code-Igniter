<html>
	<head>
		<title>Selamat datang </title>
	</head>
	<body>
		<h1>
			<img src="<?php echo base_url('uploads/'.$employee->foto)?>" width="90" height="100">
			Selamat datang <?php echo $employee->nama_lengkap;?>
		</h1>
		<a href="<?php echo site_url('employee');?>">Home</a> |
		<a href="<?php echo site_url('employee/edit_profil/'.$employee->id_employee);?>">Edit Profil</a> |
		<a href="<?php echo site_url('upload/upload_cv/'.$employee->id_employee);?>">Upload CV</a> |
		<a href="<?php echo base_url('web/viewer.html?file=').base_url('uploads/'.$employee->cv);?>">Lihat CV</a> | 
		<a href="<?php echo site_url('login/logout');?>">Logout</a>
		<hr/>
		Search by kategori :
		<ul>
			<?php foreach($kategori as $row){?>
				<li><a href="<?php echo site_url('employee/kategori/'.$row->id_kategori)?>"><?php echo $row->nama_kategori.' ('.$row->jumlah_lowongan.')';?></a></li>
			<?php
			}
			?>
		</ul>
	</body>
</html>