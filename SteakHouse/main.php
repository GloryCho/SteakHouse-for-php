<html>

<head>
	
<meta charset="utf-8">

<title>system info</title>

</head>

<body>

<center  style="margin-top: 200px;">
	
<h3>系统信息</h3>

<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">

	<tr>
		<th> 操作系统</th>
		<td><?php echo PHP_OS;?></td>
	</tr>
	<tr>

	<th>Apache版本</th>
	<td><?php echo apache_get_version();?></th>
	</tr>

	<tr>

	<th>PHP版本</th>
	<td><?php echo PHP_VERSION;?></td>
	</tr>

	<tr>
<th>运行方式</th>

<td><?php echo php_sapi_name();?></td>

	</tr>

</table>
<h3>软件信息</h3>

<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	
<tr>
	<th>软件名称</th>

	<td> Steak House </td>

</tr>
<tr>
<th>开发者</th>
<td>  赵辉 </td>
</tr>
<tr>
<th>开发时间</th>
<td>  2017.6.30</td>
</tr>
<tr>
<th>联系方式</th>
<td> 18268591688</td>
</tr>

</table>


</center>	


</body>
</html>