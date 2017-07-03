<?php


header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";
$id = $_REQUEST['id'];
$uid =$_REQUEST['uid'];

echo $id;

$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	

	//mysqli_query("set character set 'utf-8'");
	
	
	//mysqli_query("set names 'utf-8'");
	


$sql="delete  from shop where sid = $id";
		
//mysqli_query('SET NAMES UTF-8');
$result =mysqli_query($link,$sql);
if ($result) {

$sql  ="UPDATE  userinfo  SET iskeep= 0 WHERE uid ='$uid'";
		$result=mysqli_query($link,$sql);
		if ($result) {
			# code...
		header("location:shoplist.php");
		}else{

		}



			
	# code...
}else{
echo "删除失败";

return $mes;
}



}


?>