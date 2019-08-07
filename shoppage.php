<?php
header("content-type:text/html; charset=utf-8");
require_once("secret.php");
//$cart = new cart();

$item=$_GET['item'];
$num=$_GET['num'];
echo $item,$num;



?>
