<?php
session_start();
header("content-type:text/html; charset=utf-8");
//require_once("secret.php");
// $nb=$_GET["nb"]; //商品編號
// $cName=$_GET["cName"]; //商品名稱
//$num=$_GET["amount"];
//echo $num;
if(!isset($_SESSION['cart'])){	//查看是否有購物車session
    $_SESSION['cart'] = array();
}
if(isset($_GET['nb'])){		
	array_push($_SESSION['cart'],$_GET["cName"]);
}
var_dump($_SESSION['cart']);

//header("Location: secret.php"); //跳轉到選購介面(secret.php)
?>
<a href="secret.php">查看購物車</a><br/>
