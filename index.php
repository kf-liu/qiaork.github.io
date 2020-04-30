<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf=8">
<title>
	<?php echo $_POST["xingming"]."的页面";
	?>
</title>
<link rel="stylesheet" href="css/1.css" type="text/css">
</head>
<body>

<?php
	/****************test1***********/
	echo "learn web<br>";
	$arr=array("central","China","normal","university");
	print_r($arr);
	echo "<br>文件路径:".__file__."<br>line:".__line__;
	echo "<hr>输出端口:".$_SERVER['SERVER_PORT']."<hr>";
	$a=5;
	$b=7;
	if($a>$b){
		echo "$a>$b";
	}else{
		echo "$a<$b";
	}
	echo "<br>";
	echo add(5,6);

	function add($a,$b){
		return $a+$b;
	}


	/****************test2***********/
	$age=rand(1,100);
	echo "<hr>$age<br>";
	if($age<=10){
		echo "儿童";
	}elseif($age<=30){
		echo "年轻人";
	}else if($age<=50){
		echo "中年人";
	}else{
		echo "大龄人";
	}

	$major=it;
	echo "<br>{$major}的教学楼:";
	switch($major){
		case "culture":
			echo "2";
		case "mayuan":
			echo "1";
		case "it":
			echo "9";
	}

	
	/****************test3***********/
	echo "<hr>";
	foreach($arr as $k=>$v){
		echo $k."=>".$v."<br>";
	}

	$str="      I'm Chinese      ";
	echo 'trim($str)'."<br>";
	echo trim($str)."<br>";
	echo "$str<br>";

	echo strlen($str)."<br>";

	echo __FILE__."<br>";
	echo substr_count($str,'e')."<br>";
?>

<br><hr>
<table border="1px">
	<tr>
		<td colspan="2">请填写信息
		</td>
	</tr>
	<tr>
		<td>姓名
		</td>
		<td><input typr="text" name="myname"><br>
		</td>
	</tr>
	<tr>
		<td>性别
		</td>
		<td>
			<input type="radio" value="male" name="sex">男
			<input type="radio" value="female" name="sex">女
		</td>
	</tr>
	<tr>
		<td>个人爱好
		</td>
		<td>
			<input type="checkbox" value="football" name="hobby">足球
			<input type="checkbox" value="basketball" name="hobby">篮球
			<input type="checkbox" value="valleyball" name="hobby">排球
		</td>
	</tr>
	<tr>
		<td colspan="2"><textarea cols="30" rows="30"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="Submit" value="提交" />
		</td>
	</tr>
</table>
<br>
<form name="biaodan" method="post" action="">
	<table name="biaoge" border="1px" width="200px" height="400px">
		<tr>
			<td colspan="2">表单案例
			</td>
		</tr>
		<tr>
			<td>姓名
			</td>
			<td><input type="text" name="xingming" size="30" maxlength="50">
			</td>
		</tr>
		<tr>
			<td>密码
			</td>
			<td><input type="password" name="mima" size="30" maxlength="50">
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
			<td>爱好
			</td>
			<td><input type="checkbox" name="tiyu[]" value="足球">足球
				<input type="checkbox" name="tiyu[]" value="篮球">篮球
				<input type="checkbox" name="tiyu[]" value="乒乓球">乒乓球
				<input type="checkbox" name="tiyu[]" value="羽毛球">羽毛球
			</td>
		</tr>
		<tr>
			<td>年级
			</td>
			<td><select  name="nianji" width=40>
				<option value="大一">大一</option>
				<option value="大二">大二</option>
				<option value="大三" selected>大三</option>
				<option value="大四">大四</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>简介
			</td>
			<td><textarea name="intro" cols="30" rows="4"></textarea>
			</td>
		</tr>
		<tr>
			<td>文件
			</td>
			<td><input type="file" name="wenjian">
			</td>
		</tr>
		<tr>
			<td colspan=2><input name="submit" type="submit" value="提交">
				<input name="reset" type="reset" value="重设">
			</td>
		</tr>
	</table>
</form>

<?php
	echo "姓名：<b><font color=blue>".$_POST["xingming"]."</font></b><br>";
	echo "性别：<b><font color=blue>".$_POST["xingbie"]."</font></b><br>";

	echo "体育爱好：";
	for($i=0;$i<count($_POST["tiyu"]);$i++){
		echo $_POST["tiyu"][$i]." ";
	}

	echo "<br>年级：".$_POST["nianji"];

	echo "<hr>";
?>

</body>
</html>