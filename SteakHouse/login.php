<?php
header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$username ="root";
$passwd ="201212";
$db="steakhouse";


$link =new mysqli($servername,$username,$passwd,$db);

if($link){

	
	
	mysqli_query("set character set 'utf-8'");
	
	
	mysqli_query("set names 'utf-8'");
	if(isset($_POST["subl"])){

$username =$_POST["username"];
$passwd=$_POST["passwd"];

$sql="select passwd from userinfo where username ='$username'  limit 1";
		
mysqli_query('SET NAMES UTF-8');
$result =mysqli_query($link,$sql);
$pass=mysqli_fetch_row($result);
$pa=$pass[0];
		
if($pa==$passwd){
	setcookie("username",$username);
	header("location:back.php");


}else{

echo "mima cuowu";


}
		
}
	mysqli_close($link);
}

?>