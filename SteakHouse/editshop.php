
<?php

$id = $_REQUEST['id'];
$uida= $_REQUEST['uida'];



header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";


$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	
	

	


$sql="select * from userinfo where iskeep = 0";
	

$result =mysqli_query($link,$sql);
$rows=mysqli_fetch_all($result);


	






	


		

	mysqli_close($link);
}

?>
<html>

<head>
	
<meta charset="utf-8">

<title>system info</title>

</head>

<body>

<center  style="margin-top: 100px;">
	
<h3>添加分店</h3>
<form  action="doeditshop.php?id=<?php echo $id;?>&uida=<?php echo $uida; ?>";" method="post">
<table width="60%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">

	<tr>
		<td align="center"> 分店长</th>
		<td align="center"><input style="width: 250px;" type="text" name="skeep"></td>
	</tr>
	<tr>

	<td align="center">手机号</th>
	<td align="center"><input style="width: 250px;"" type="number" name="sphone" ></th>
	</tr>

	

	<td align="center">用户</th>
	<td align="center"><select style="width: 250px;border: none;" name="uid">

<?php 
foreach ($rows as $row) { ?>
<option value="<?php echo $row['0'];?>"><?php echo $row['1']?></option>

<?php	# code...
}

?>
</select>
	</td>
	</tr>

<tr>
<td align="center", colspan="2"><input type="submit" name ="editshop" value="ziufai" style="border: none; width: 200px;" /></td>
</tr>

</table>
</form>

</center>	


</body>
</html>
