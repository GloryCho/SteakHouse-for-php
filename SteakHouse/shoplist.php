<?php

header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";


$link =mysqli_connect($servername,$user,$passwd,$db);

if($link){

	
	
//	mysqli_query("set character set 'utf-8'");
	
	//	mysqli_query("set names 'utf-8'");
//	


$sql="select * from shop ";
	
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

$sql="select * from shop  limit {$offset},{$pageSize}";
		
$result =mysqli_query($link,$sql);
$rows=mysqli_fetch_all($result);
//print_r($pass);


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
<th width="10%">店铺号</th>
<th width="12%">账户</th>
<th width="12%">姓名</th>
<th width="14%">电话</th>
<th width="20%">地址</th>
<th>操作 </th>
</tr>
</thead>
<tbody>
	
<?php 
$i=1;
foreach($rows as $row){



	
	
	
	?>
	<tr>


<td><input type="checkbox" id ="c1"class="check"><label for="c1" class="label"><?php echo $i;?></label>
<td> <?php echo $row['5'];?></td>
<td> <?php echo $row['1']; ?></td>
<td> <?php echo $row['3']; ?></td>
<td> <?php echo $row['4']; ?> </td>




<td align="center"><input type="button" value="修改" class="btn" onclick="editshop(<?php echo $row['0'];?>,<?php echo $row['5'];?>)"><input type="button" value="删除" class="btn" onclick="delshop(<?php echo $row['0'];?>,<?php echo $row['5'];?>)" ></td>


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
	
	function editshop(id,uida){
	//	window.alert(uida);

		window.location ="editshop.php?id="+id+"&uida="+uida;
	}


	function delshop(id,uid){


		window.location="delshop.php?id="+id+"&uid="+uid;
	}
</script>


</html>