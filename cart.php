<h2>購物車中有以下商品：</h2>
<table cellpadding="0" cellspacing="0" border="1" width="100%">
<tr>
<td>商品名稱</td>
<td>商品單價</td>
<td>購買數量</td>
<td></td>
</tr>
<?php
session_start();
//$uid=$_SESSION["uid"];
$arr=array();
if(!empty($_SESSION["gwc"]))
{
$arr=$_SESSION["gwc"];
}
require ("config.php");
?>
</table>
<div>
<a href="index.php" rel="external nofollow" rel="external nofollow" >檢視購物車</a> 
<a href="secret.php" rel="external nofollow" rel="external nofollow" >瀏覽商品</a> 