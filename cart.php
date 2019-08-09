


<h2>購物車中有以下商品：</h2>
<table cellpadding="0" cellspacing="0" border='1' width="100%">
<tr>
<td style='width:25%'>商品名稱</td>
<td style='width:25%'>商品單價</td>
<td style='width:25%'>購買數量</td>
<td style='width:25%'>數量價格</td>
</tr>
</table>
<form action="secret.php" method="POST">
<?php
	session_start();	
	
	if (!isset($_SESSION["userName"])) //進入購物車頁面，必須先有登入會員session
	{
		header("Location: login.php");
		exit();
	}

	if(isset($_SESSION['cart'])){	//查看是否有購物車session
		$arr = array_count_values($_SESSION['cart']);
		require ("config.php");
		$allTotal=0;
		foreach($arr as $key=>$value){
			$sql = "SELECT * FROM `commodity` WHERE cName='$key'";
			$result = mysqli_query($link,$sql);
			$row = mysqli_fetch_array($result);
			$total = ($row["cPrice"])*$value;
			echo "<table cellpadding='0' cellspacing='0' border='1' width='100%'>
				<tr>
				<td style='width:25%'>".$key."</td>
				<td style='width:25%'>".$row["cPrice"]."</td>
				<td style='width:25%'>$value</td>
				<td style='width:25%'>$total</td>
				</tr>
				</table>";

			$allTotal +=$total;

		}
	}else{
		echo "<table cellpadding='0' cellspacing='0' border='1' width='100%'>
			<tr>
			<td style='width:100%'>您目前尚未添加商品</td>
			</tr>
			</table>";
	}
?>
	<table cellpadding="0" cellspacing="0" border='1' width="100%">
	<tr><?php if(isset($_SESSION['cart'])){?>
		<td align="right" style="color:red">總金額:<?=$allTotal ?></td>
	<?php } ?>
	</tr>
	</table>
	<input type="submit" value="返回" οnclick="location='index.php';" />
</form>

<?php
function delect($n){
	// $arr = array_count_values($_SESSION['cart']);
	// unset($arr['$n']);
	echo hello;
}
?>