
<?php

header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";

$username =$_COOKIE['username'];
$id = $_REQUEST['id'];


$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	
	
	//mysqli_query("set character set 'utf-8'");
	
	
//	mysqli_query("set names 'utf-8'");
	


$sql="select * from pro where pid ='$id' ";
	
//mysqli_query('SET NAMES UTF-8');
$result =mysqli_query($link,$sql);
$pass=mysqli_fetch_row($result);
$pa=$pass[0];


}


?>

<html>

<head>
	
<meta charset="utf-8">

<title>system info</title>

</head>

<body>

<center  style="margin-top: 100px;">
	
<h3>菜品查看</h3>
<form  name="addsForm" action="doaddpro.php" method="post"  enctype="multipart/form-data">
<table width="60%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">

	<tr>
		<td align="center"> 菜名</th>
		<td align="center"><?php echo $pass[1];?></td>
	</tr>
	<tr>

	<td align="center">价格</th>
	<td align="center"><?php echo $pass[2];?></th>
	</tr>
		<tr>

	<td align="center">发布时间</th>
	<td align="center"><?php echo $pass[7];?></th>
	</tr>
			<tr>

	<td align="center">描述</th>
	<td align="center"><?php echo $pass[3];?></th>
	</tr>

	<tr>

	<td align="center">图片</th>
	<td align="center"><img src="<?php echo $pass[4];?>">

	</td>
	</tr>



</table>
</form>

</center>	


</body>
</html>

