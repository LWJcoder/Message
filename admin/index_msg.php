<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
</head>
<body>
	<header>
		<h3>留言板</h3>
		<div>
			<a href="/login.php"><span>登录</span></a>
			<a href="/register.php"><span>注册</span></a>
		</div>
	</header>

	<content>
		<form action="/post.php" method="post">
			<fieldset>
				<label for="title">标题</label>
				<input type="text" name="title" id="title" maxlength="40">

			</fieldset>
			<fieldset>
				
				<textarea maxlength="120"></textarea>
			</fieldset>

			<button type="submit" >提交留言</button>
		</form>

		<div class="list">
			<table>
				<tr>
					<td>标题</td>
					<td>内容</td>
					<td>作者</td>
				</tr>
				<tr id="listContent"></tr>
			</table>

			<ul>
				<li>下一页</li>
				<li></li>
				<li>上一页</li>
			</ul>
		</div>
	</content>
</body>
</html>