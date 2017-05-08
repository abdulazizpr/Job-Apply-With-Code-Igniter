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
		
		<?php
		if($posting){
			foreach($posting as $row){?>
				<fieldset>
					<img src="<?php echo base_url('uploads/'.$row->logo_perusahaan)?>" width="80" height="100"/>
					<h3><?php echo $row->judul;?></h3>
					<p>Tanggal : <?php echo $row->tgl_posting;?></p>
					</br>
			<a href="<?php echo site_url('employee/read_more/'.$row->id_posting);?>">Baca Selanjutnya</a> | <a href="<?php echo site_url('employee/read_more/'.$row->id_posting);?>">Aply Pekerjaan</a></br>
					<?php 
						$isi = $row->konten;
						echo word_limiter($isi,100);
					?>
					</fieldset>
					</br>
					</br>
					
				</fieldset>
	<?php
			}
		}else{
	?>
		<p align="center"><i style="color:grey;font-weight=italic;" align="center">Tidak ada lowongan</i></p>
	<?php
		}
	?>
		<br/>	
	</body>
</html>