<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<form action="register.php" method="post">
		<label for="username">用户名</label>
		<input type="text" id="username">

		<label for="psw">密码</label>
		<input type="password" name="psw" id="psw">

		
		<label for="psw1">再次密码</label>
		<input type="password" name="psw" id="psw1">

		<input type="submit" name="submit" value="注册">
	</form>
	<?php
		require_once('conn.php');

		$name = $_POST['username'];
		$psw = md5($_POST['psw']);

		$sql = "select * from user where username = " $name;
		$info = mysql_query($sql);
		$res = mysql_num_rows($info);
		if ($res){
			echo "<script> alert('用户已经存在');
			location.href = 'reg.php';</script>"
		}else{
			$sql1 = "insert into 'user' (username, password) values('$name', '$psw')";
			$result = mysql_query($sql1);
			if ($result){
				echo "<script> alert('注册成功');
			location.href = 'login.php';</script> ";
			}else{
				<script> alert('注册失败');
			location.href = 'reg.php';</script>
			}
		}

	  ?>
</body>
</html>