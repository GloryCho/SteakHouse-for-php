<?php
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";
$username =$_COOKIE['username'];
echo "string";

$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	
	
//	mysqli_query("set character set 'utf-8'");
	
	
	//mysqli_query("set names 'utf-8'");
	
	
	
if(isset($_POST["addpro"])){

$pname =$_POST["pname"];
$pmoney=$_POST["pmoney"];
$pdes=$_POST["pdes"];

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
$time = date('y-m-d');
$pTime = (string) $time;



echo $pname;
echo $pmoney;
echo $pdes;

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
//$des =$destination;

echo $mes;

 echo $destination;

$isShow =0;

if ($username =='root') {

	$isShow =1;
	# code...
}else{

	$isShow =0;
}
echo "111111111111";
	
	$sql ="INSERT INTO pro(pName,pImg ,pPrice,pDesc,isShow,pTime) values ('$pname','$destination','$pmoney','$pdes','$isShow','$pTime')";
	$result=mysqli_query($link,$sql);
	
	if($result){
	
			# code...
			header("location:prolist.php");
	
		

		
	}else{
		
	echo "fail";	
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}
	

	
	mysqli_close($link);
}

}


?>