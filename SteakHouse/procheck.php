<?php

header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";

$username =$_COOKIE['username'];


$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	
	
	//mysqli_query("set character set 'utf-8'");
	
	
//	mysqli_query("set names 'utf-8'");
	


$sql="select * from pro";
	
//mysqli_query('SET NAMES UTF-8');
$result =mysqli_query($link,$sql);
$rows=mysqli_fetch_all($result);


		$totalRows=mysqli_num_rows($result);


$pageSize =10;
$totalPage=ceil($totalRows/$pageSize);
$page= $_REQUEST['page']?(int)$_REQUEST['page']:1;

if($page<1||$page ==null||!is_numeric($page)){
$page=1;

}

if ($page>=$totalPage)$page=$totalPage; 
$offset=($page-1)*$pageSize;

$sql="select * from pro where isShow =0  limit {$offset},{$pageSize}";
		
$result =mysqli_query($link,$sql);
$rows=mysqli_fetch_all($result);
print_r($pass);
$url= $_SERVER['PHP_SELF'];
$index=($page==1)?"首页":"<a href='{$url}?page=1'>首页 </a>";

$last=($page==$totalPage)?"尾页":"<a href='{$url}?page={$totalPage}'>尾页 </a>";
$prev =($page==1)?"上一页":"<a href='{$url}?page=".($page-1)."'>上一页</a>";
$next =($page==$totalPage)?"下一页":"<a href='{$url}?page=".($page+1)."'>下一页</a>";
$str="总共{$totalPage}页/当前是第{$page}页";

	for ($i=1; $i <=$totalPage ; $i++) { 

		if ($page==$i) {

			$p.="[{$i}]";
			# code...
		}else{

			$p.="<a href='{$url}?page={$i}'>[{$i}]</a>";
			# code...
		}
		}	
		echo "<hr/>";
	


		

	mysqli_close($link);
}

?>
<html>

<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/list.css"/>
</head>
<body>
<div class="details">

<table class="utable" cellpadding="" cellspacing="0">
<thead>
	
<tr>
<th width="10%">序号</th>
<th width="18%">菜名</th>
<th width="19%">价格</th>
<th width="25%">描述</th>
<th width="5%">状态</th>
<th>操作 </th>
</tr>
</thead>
<tbody>
	<?php

$i=1;
foreach ($rows as $row) {
	# code...



	?>
	<tr>


<td><input type="checkbox" id ="c1"class="check"><label for="c1" class="label"><?php echo $i;?></label>
<td> <?php echo $row[1];  ?> </td>
<td> <?php echo $row[2];  ?>  </td>
<td><?php echo $row[3];  ?> </td>
<td>已审核</td>

<td align="center">
<input type="button" value="修改" class="btn"  >
<input type="button" value="删除" class="btn" onclick="delpro(<?php echo $row[0]; ?>)">
<input type="button" value="查看" class="btn"  onclick="showpro(<?php echo $row[0]; ?>)"></td>


	</tr>


	<?php 
$i++;

}

	?>
</tbody>



</table>

<ul   style="padding-left: 1200px;">
<li style="list-style: none;float: left;width: 170px;height: 40px;margin:0;"><?php echo $str;?></li>
<li style="list-style: none;float: left;width: 50px;height: 40px;"><?php echo $index;?></li>
<li style="list-style: none;float: left;width: 60px;height: 40px;margin:0;"><?php echo $prev;?></li>
<li style="list-style: none;float: left;width: 50px;height: 40px;padding-top:3px; "><?php echo $p;?></li>
<li style="list-style: none;float: left;width: 60px;height: 40px;"><?php echo $next;?></li>
<li style="list-style: none;float: left;width: 50px;height: 40px;"><?php echo $last;?></li>
</ul>
</div>






</body>

<script type="text/javascript">
	
	function editpro(id){

		window.location ="editpwd.php?id="+id;
	}


	function delpro(id){


		window.location="delpro.php?id="+id;
	}
		function showpro(id){


		window.location="showproc.php?id="+id;
	}
</script>


</html>