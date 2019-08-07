<?php

header("content-type:text/html; charset=utf-8");
require_once("secret.php");
$nb=$_GET["nb"]; //商品編號
$cName=$_GET["cName"]; //商品名稱
$arr=$_SESSION["mycar"];

if(is_array($arr)){
    if(array_key_exists($nb,$arr)){
     //1、array_key_exists($pid,$arr)判斷$arr中是否存在鍵值為$pid的一個一維陣列,如果存在的話,就說明此商品以前購買過,只需要把數量加1
          $uu=$arr[$nb]; //從二維數組裡拿出對應的一維陣列,該一維陣列包括id name num 三個值
          $uu["num"]=$uu["num"]+1;  //改變數量,將數量加1
          $arr[$nb]=$uu; //改完後再將此一維陣列放回二維陣列中
    }else{   
         //2.此商品第一次購買,就將得到的id和name值組成一個一維陣列
          $arr[$nb]=array("nb"=>$nb,"cName"=>$cName,"num"=>1);
    }
}else{
$arr[$pid]=array("nb"=>$nb,"cName"=>$cName,"num"=>1);
}
$_SESSION["mycar"]=$arr;//購買完後,將此陣列重新放入session中,便可以在各個頁面看到此session
//ob_clean();//清空快取
//header("Location: index.php");//跳轉到選購介面(secret.php)
?>
