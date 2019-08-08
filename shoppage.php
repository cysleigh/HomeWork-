<?php
session_start();
header("content-type:text/html; charset=utf-8");
//require_once("secret.php");
// $nb=$_GET["nb"]; //商品編號
// $cName=$_GET["cName"]; //商品名稱
if(!isset($_SESSION['cart'])){	//查看是否有購物車session
    $arr = $_SESSION['cart'];
}
if(isset($_GET['nb'])){		
	 $arr = $arr + $_GET['nb'];
    var_dump($_SESSION['cart']);
    // foreach($arr as $key =>$value){
    //     echo "$key -> $value";
	//   }
}


//header("Location: secret.php"); //跳轉到選購介面(secret.php)
?>
<a href="secret.php">查看購物車</a><br/>
