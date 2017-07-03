<?php  
// 假定数据库用户名：root，密码：123456，数据库：RUNOOB  
$con=mysqli_connect("localhost","root","201212","steakhouse");  
if (mysqli_connect_errno($con))  
{  
    echo "连接 MySQL 失败: " . mysqli_connect_error();  
}  

$sql="SELECT * FROM userinfo ORDER BY alexa"; 
$result=mysqli_query($con,$sql); 

// 获取数据 
$user = mysqli_fetch_all($result); 
echo $result;
echo $user;
echo "string";
// 释放结果集 
mysqli_free_result($result); 

mysqli_close($con); 
?>