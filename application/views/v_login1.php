<!DOCTYPE html>
<html>
<head>
	<title>Login Santri</title>
</head>
<body>
	<h1>Login <br/> Santri</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post"> <!-- kirim data ke fungsi -->
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>