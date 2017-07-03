

<html>

<head>
	
<meta charset="utf-8">

<title>system info</title>

</head>

<body>

<center  style="margin-top: 100px;">
	
<h3>添加菜品</h3>
<form  name="addsForm" action="doaddpro.php" method="post"  enctype="multipart/form-data">
<table width="60%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">

	<tr>
		<td align="center"> 菜名</th>
		<td align="center"><input style="width: 250px;" type="text" name="pname"></td>
	</tr>
	<tr>

	<td align="center">价格</th>
	<td align="center"><input style="width: 250px;" type="number" name="pmoney" ></th>
	</tr>
		<tr>

	<td align="center">发布时间</th>
	<td align="center"><?php echo date('Y-m-s');?></th>
	</tr>
			<tr>

	<td align="center">描述</th>
	<td align="center"><input style="width: 250px;" type="text" name="pdes"></th>
	</tr>

	<tr>

	<td align="center">图片</th>
	<td align="center"><input type="file" name="myfile" >

	</td>
	</tr>

<tr>
<td align="center", colspan="2"><input type="submit" name ="addpro" value="发布" style="border: none; width: 200px;" /></td>
</tr>

</table>
</form>

</center>	


</body>
</html>



<!-- <table width="60%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">

	<tr>
		<td align="center"> 菜名</th>
		<td align="center"><input style="width: 250px;" type="text" name="pname"></td>
	</tr>
	<tr>

	<td align="center">价格</th>
	<td align="center"><input style="width: 250px;" type="number" name="pmoney" ></th>
	</tr>
		<tr>

	<td align="center">发布时间</th>
	<td align="center"><?php echo date('Y-m-s');?></th>
	</tr>
			<tr>

	<td align="center">描述</th>
	<td align="center"><input style="width: 250px;" type="text" name="pdes"></th>
	</tr>

	<tr>

	<td align="center">图片</th>
	<td align="center"><input type="file" name="myfile" >

	</td>
	</tr>
 -->
