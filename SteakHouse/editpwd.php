<?php


header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";
$id = $_REQUEST['id'];



$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	

//	mysqli_query("set character set 'utf-8'");
	
	
	//mysqli_query("set names 'utf-8'");
	


$sql="select uid,username,passwd from userinfo where uid = $id";
		
//mysqli_query('SET NAMES UTF-8');
$result =mysqli_query($link,$sql);
$pass=mysqli_fetch_row($result);



}


?>

<html>

<head>
	
<meta charset="utf-8">

<title>system info</title>

</head>

<body>

<center  style="margin-top: 100px;">
	
<h3>修改密码</h3>
<form action="doeditpwd.php?id=<?php echo $id;?>" method="post">
<table width="40%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">

	<tr>
		<td align="center"> 用户id</th>
		<td align="center"><?php echo $pass['0'];?></td>
	</tr>
	<tr>

	<td align="center">用户名</th>
	<td align="center"><?php echo $pass['1'];?></th>
	</tr>

	<tr>

	<td align="center">用户密码</th>
	<td align="center"><input type="text" name="passwd" placeholder="please input password" style="border-style:none;box-shadow:none;"></td>
	</tr>

<tr>
<td align="center", colspan="2"><input type="submit" value="edit pass" style="border: none;" /></td>
</tr>

</table>
</form>

</center>	


</body>
</html>



