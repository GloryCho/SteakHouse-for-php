<?php


header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";
$id = $_REQUEST['id'];
$username =$_COOKIE['username'];

echo $id;

$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	

	//mysqli_query("set character set 'utf-8'");
	
	
	//mysqli_query("set names 'utf-8'");
	
if ($username ='root') {

$sql="delete  from pro where pid = $id";
		
//mysqli_query('SET NAMES UTF-8');
$result =mysqli_query($link,$sql);
if ($result) {

header("location:prolist.php");
			
	# code...
}else{
echo "删除失败";


}



	# code...
}else{



echo "string";

	echo "<a href='prolist.php'>ni mei you quan xian shan chu />";
}



}


?>