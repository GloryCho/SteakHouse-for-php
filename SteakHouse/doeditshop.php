<?php



$id = $_REQUEST['id'];

$uida = $_REQUEST['uida'];



echo $id;
echo "string";
echo $uida;




header("Content-type:text/html;charset=utf-8");
$servername ="localhost";
$user ="root";
$passwd ="201212";
$db="steakhouse";


$link =new mysqli($servername,$user,$passwd,$db);

if($link){

	//echo "ssss";
	
	//mysqli_query("set character set 'utf-8'");
	
	//mysqli_query("set names 'utf-8'");
	if(isset($_POST["editshop"])){

$skeep =$_POST["skeep"];
$sphone=$_POST["sphone"];

$uid =$_POST["uid"];
//echo $skeep;



$sql ="UPDATE  shop  SET skeeper= '$skeep',phone ='$sphone',uid= '$uid' WHERE sid ='$id'";
		echo "string";
	$result=mysqli_query($link,$sql);

	
	if($result){
$sql  ="UPDATE  userinfo  SET iskeep= 1 WHERE uid ='$uid'";
		$result=mysqli_query($link,$sql);


		echo "1111111";
		if ($result) {
echo "2222222222";


			$sql  ="UPDATE  userinfo  SET iskeep= 0 WHERE uid ='$uida'";
		$result=mysqli_query($link,$sql);

		if ($result) {
			echo "33333333333333";

			header("location:shoplist.php");
			# code...
		}else{

		}
			# code...
			
		}else{

		}

	
		
		}else{
//header("location:editshop.php");
			

		}
	

	mysqli_close($link);
}
}


?>