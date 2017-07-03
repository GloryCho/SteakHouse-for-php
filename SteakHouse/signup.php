<?php
$servername ="localhost";
$username ="root";
$passwd ="201212";
$db="steakhouse";


$link =new mysqli($servername,$username,$passwd,$db);

if($link){

	
	
	mysqli_query("set character set 'utf-8'");
	
	
	mysqli_query("set names 'utf-8'");
	
	
	
if(isset($_POST["sub"])){

$username =$_POST["username"];
$passwd=$_POST["passwd"];

$sql_select="select username form userinfo where username='$username' limit 1";
$check_query = mysqli_query( $link, $sql_select);
	$pass= mysqli_fetch_row($check_query);

$pa=$pass[0];

 if($pa==1)//判断数据库表中是否已存在该用户名
        {
			
		echo "gai yong hu yi zhu ce";	
		}
	
	$sql ="INSERT INTO userinfo(username,passwd) values ('$username','$passwd')";
	
	$result=mysqli_query($link,$sql);
	
	if($result){
		
		echo "<script type="."\""."text/javascript"."\"".">"."window.location="."\""."return.html"."\""."</script>";  
		
	}else{
		
	echo "fail";	
	echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}
	

	
	mysqli_close($link);
	
	
	
	
}
}




?>
