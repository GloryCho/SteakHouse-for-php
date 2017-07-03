<?php

header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$username ="root";
$passwd ="201212";
$db="steakhouse";


$link =new mysqli($servername,$username,$passwd,$db);

if($link){

	echo "string";
	
	mysqli_query("set character set 'utf-8'");
	
	
	mysqli_query("set names 'utf-8'");
	


$sql="select * from userinfo where isroot = 0";
	
mysqli_query('SET NAMES UTF-8');
$result =mysqli_query($link,$sql);
$rows=mysqli_fetch_all($result);

	echo "string";
		$totalRows=mysqli_num_rows($result);


$pageSize =1;
$totalPage=ceil($totalRows/$pageSize);
$page= $_REQUEST['page']?(int)$_REQUEST['page']:1;
	//echo $page;
if($page<1||$page ==null||!is_numeric($page)){
$page=1;

}

if ($page>=$totalPage)$page=$totalPage; 
$offset=($page-1)*$pageSize;

$sql="select * from userinfo where isroot =0 limit {$offset},{$pageSize}";
		echo "string";	
$result =mysqli_query($link,$sql);
$rows=mysqli_fetch_all($result);
//print_r($pass);
$url= $_SERVER['PHP_SELF'];
$index=($page==1)?"首页":"<a href='{$url}?page=1'>首页 </a>";

$last=($page==$totalPage)?"尾页":"<a href='{$url}?page={$totalPage}'>尾页 </a>";
$prev =($page==1)?"上一页":"<a href='{$url}?page=".($page-1)."'>上一页</a>";
$next =($page==$totalPage)?"下一页":"<a href='{$url}?page=".($page+1)."'>下一页</a>";
$str="总共{$totalPage}页/当前是第{$page}页";
	e
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