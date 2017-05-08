<h1 align="center">Edit Employee</h1>
<p align="center" style="color:red;"><?php echo $error['error'];?></p>			
<form action="<?php echo site_url('employee/edit_profil/'.$employee->id_employee);?>" method="POST" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td> <input type="text" name="nama_lengkap" value="<?php echo $employee->nama_lengkap;?>" /> </td>
			<td> <?php echo form_error('nama_lengkap', '<div style="color:red">','</div>');?> </td>
		</tr>
		<tr>
			<td>Foto Profil</td>
			<td>:</td>
			<td> <input type="file" name="userfile" value="<?php echo $employee->foto?>" size="20"/> </td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><textarea name="deskripsi"><?php echo $employee->deskripsi;?></textarea></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td> <input type="email" name="email" value="<?php echo $employee->email;?>"/> </td>
			<td> <?php echo form_error('email', '<div style="color:red">','</div>');?> </td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td> <textarea name="alamat"><?php echo $employee->alamat;?></textarea> </td>
		</tr>
		<tr>
			<td><a href="<?php echo site_url('employee/ubah_password/'.$employee->id_employee);?>">Ubah Password</a></td>
		</tr>
		<tr>
			<td><input type="submit" value="Simpan" /></td>
		</tr>
	</table>
</form>