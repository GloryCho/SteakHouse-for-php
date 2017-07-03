<?php




$passwd2=$_POST["passwd"];
$id =$_REQUEST['id'];
echo $id;
echo $passwd;




header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";


$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	echo "ssss";
	
	mysqli_query("set character set 'utf-8'");
	
	
	mysqli_query("set names 'utf-8'");





$sql ="UPDATE  userinfo  SET passwd= '$passwd2' WHERE uid ='$id'";
		echo "string";
	$result=mysqli_query($link,$sql);

	
	if($result){

	
		header("location:ulist.php");
		}else{
header("location:editpwd.php");
			

		}
	

	mysqli_close($link);
}


?>