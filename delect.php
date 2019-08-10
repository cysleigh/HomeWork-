<?php
session_start();
$delCommodity = $_GET["del"];
 foreach($_SESSION['cart'] as $key=>$value){
    $a = $_SESSION['cart'];
    if($value == $delCommodity){
        unset($a[$key]);
     } 
    $_SESSION['cart'] = $a;
}
//unset($arr[$delCommodity]);

//echo "<script>alert('已刪除該商品'); location.href = 'cart.php';</script>";
header("location:cart.php");
?>