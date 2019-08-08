<?php
session_start();
header("content-type:text/html; charset=utf-8");
//require_once("secret.php");
$nb=$_GET["nb"]; //商品編號
$cName=$_GET["cName"]; //商品名稱
$arr=array();
if(!empty($_SESSION["arr"]))
{
$arr = array(array($nb,1));
$_SESSION["arr"] = $arr;

//header("Location: secret.php");
}else{
    $arr = array(array($nb,1));
    $_SESSION["arr"] = $arr;
    //header("Location: secret.php"); //跳轉到選購介面(secret.php)
}

echo var_dump($_SESSION["arr"];


?>
