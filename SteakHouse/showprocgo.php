<?php
$servername ="localhost";
$username ="root";
$passwd ="201212";
$db="steakhouse";
$username =$_COOKIE['username'];
echo "string";

$link =new mysqli($servername,$username,$passwd,$db);

if($link){

	
	
//	mysqli_query("set character set 'utf-8'");
	
	
	//mysqli_query("set names 'utf-8'");
	
	
	


$id = $_REQUEST['id'];






if ($username !='root') {


	# code...
}else{

	

echo "111111111111";
	
	$sql ="update  pro set isSHow=1 where pid ='$id'";
	$result=mysqli_query($link,$sql);
	
	if($result){
	
			# code...
			header("location:prolist.php");
	
		

		
	}else{
		
	echo "fail";	
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}
	

	}
	mysqli_close($link);
}




?>