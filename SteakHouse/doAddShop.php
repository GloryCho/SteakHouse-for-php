<?php
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";


$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	
	
//	mysqli_query("set character set 'utf-8'");
	
	
	//mysqli_query("set names 'utf-8'");
	
	
	
if(isset($_POST["addshop"])){

$skeep =$_POST["skeep"];
$sphone=$_POST["sphone"];
$sadd=$_POST["sphone"];
$uid =$_POST["uid"];
//print_r($_FILES);

$filename =$_FILES['myfile']['name'];

$type =$_FILES['myfile']['type'];


$tmp_name =$_FILES['myfile']['tmp_name'];


$error =$_FILES['myfile']['error'];

$size =$_FILES['myfile']['size'];
$destination='uploads/'.$filename;
//echo $size;

//echo $skeep;
echo $uid;
echo $destination;

if ($error==UPLOAD_ERR_OK) {




if(is_uploaded_file($tmp_name)){

//print_r($destination);
	if (move_uploaded_file($tmp_name, $destination)) {
		$mes ="gogogo";
		# code...
	}else{

		$mes ="fail";
	}
	# code...
}else{

	$mes=" wenjian buneng http post  way upload";

}
}else{

}
$des ="SSSSSSSSSSSSSSSSSS";

echo $mes;

 echo $destination;
	
	$sql ="INSERT INTO shop(skeeper,sImg,address,phone,uid ) values ('$skeep','$destination','$sadd','$sphone','$uid')";
	
	$result=mysqli_query($link,$sql);
	
	if($result){
		$sql  ="UPDATE  userinfo  SET iskeep= 1 WHERE uid ='$uid'";
		$result=mysqli_query($link,$sql);
		if ($result) {
			# code...
			header("location:shoplist.php");
		}else{

		}

		

		
	}else{
		
	echo "fail";	
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}
	

	
	mysqli_close($link);
}

}
