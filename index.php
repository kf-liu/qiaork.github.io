<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf=8">
<title>
	QIAORK
	<?php 
		if($_POST["xingming"]!=""){
			echo " - ".$_POST["xingming"];
		}
	?>
</title>
<link rel="stylesheet" href="index/css/index.css" type="text/css">
</head>
<body>

<div class="guide">
	<div class="top topl">QIAORK
	</div>
	<div class="top topr">
		<ul>
			<li><a href="javascirpt:void(0)"><b>首页</b></a></li>
			<li><a href="javascirpt:void(0)">论坛</a></li>
			<li><a href="javascirpt:void(0)">探索</a></li>
		</ul>
	</div>
</div>

<?php
	echo "姓名：<b><font color=blue>".$_POST["xingming"]."</font></b><br>";
	echo "性别：<b><font color=blue>".$_POST["xingbie"]."</font></b><br>";

	echo "简介：".$_POST["intro"];
?>

<div name="login" class="logindiv">
	<form name="biaodan" method="post" action="">
		<table name="biaoge" border="1px" width="200px" height="400px">
			<tr>
				<td colspan="2">注册
				</td>
			</tr>
			<tr>
				<td>姓名
				</td>
				<td><input type="text" name="xingming" size="30" maxlength="50" class="logintxt logintxts">
				</td>
			</tr>
			<tr>
				<td>密码
				</td>
				<td><input type="password" name="mima" size="30" maxlength="50" class="logintxt logintxts">
				</td>
			</tr>
			<tr>
				<td>性别
				</td>
				<td><input type="radio" name="xingbie" value="male" checked>男
					<input type="radio" name="xingbie" value="female">女
				</td>
			</tr>
			<tr>
				<td>生日YYYY/MM/DD
				</td>
				<td><input type="text" name="birth" size="30" maxlength="10" class="logintxt logintxts">
				</td>
			</tr>
			<tr>
				<td>简介
				</td>
				<td><textarea name="intro" cols="30" rows="4" class="logintxt"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan=2><input name="submit" type="submit" value="提交">
					<input name="reset" type="reset" value="重设">
				</td>
			</tr>
		</table>
	</form>
</div>


</body>
</html>