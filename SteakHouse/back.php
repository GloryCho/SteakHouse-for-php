




<!DOCTYPE html>
<html>

<head>
<title>Steak House 后台管理系统</title>

<link type="text/css" rel="stylesheet" href="css/back.css"/>
<script type="text/javascript" src="js/back.js"></script>
<meta charset="utf-8">
</head>


<body>

<div class="header">

<div class="logo">
<a href="index.html">SteakHouse </a>

</div>

<div class="system_name">

Steak House 后台管理系统
</div>
</div>

<div class="opt">
<div class="login_name">

<?php
echo "欢迎您 : ";
$username =$_COOKIE['username'];
echo $username;
?>
</div>
<ul class="opt_ite">


<li><a href="main.php" target="mainFrame">首页</a></li>
<li><a href="#">刷新</a></li>
<li><a href="#">前进</a></li>
<li><a href="#">后退</a></li>
<li><a href="index.html">退出</a></li>

</ul>
</div>
<div class="main">

<div class="right">
	<div class="r_item">
		<a>管理列表</a>
	</div>
	<div class="r_content">
<ul class="mlist" >
<li>
<h4 onclick="show('menu1','change1')"><span id="change1">+</span>  菜品管理</h4>


<ul id="menu1" style="display:none;">
<li class="detail"><a href="addpro.php" target="mainFrame">添加菜品</a></li>
<li class="detail"><a href="prolist.php" target="mainFrame">菜品列表</a></li>
<?php 
if ($username=="root") {
	# code...

?>

<li class="detail"><a href="procheck.php" target="mainFrame">新菜审核</a></li>
<?php

}
?>
</ul>


</li>

<li>
<h4 onclick="show('menu3','change3')"><span id="change3">+</span>  店铺管理</h4>
<ul id="menu3" style="display: none;">

<li class="detail"li class="detail"><a href="addshop.php" target="mainFrame">添加店铺</a></li>
<li class="detail"><a href="shoplist.php" target="mainFrame">店铺列表</a></li>


</ul>	
</li>
<li>

<?php 

if ($username=="root") {
	# code...
?>
<h4 onclick="show('menu4','change4')"><span id="change4">+</span> 用户管理</h4>
<ul id="menu4" style="display: none;">


<li class="detail"><a href="ulist.php?page=1" target="mainFrame">用户列表</a></li>


</ul>

<?php
}	
?>

</li>




</ul>
</div>

</div>


<div class="left">
<div class="l_item">
	
	<a>详细信息</a>
</div>

<div class="l_content">


<iframe src="main.php" frameborder="0" name="mainFrame" width="100%" height="100%"></iframe>

</div>
</div>



</div>


<div class="bottom">
<?php


$username =$_COOKIE['username'];
echo $username;
?>
</div>
sssssssss
</body>

</html>
