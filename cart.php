<form action="secret.php" method="POST">
<?php
	session_start();	
	if (!isset($_SESSION["userName"])) //進入購物車頁面，必須先有登入會員session
	{
		header("Location: login.php");
		exit();
	}
	
	$arr = array_count_values($_SESSION['cart']);
	require ("config.php");
	foreach($arr as $key=>$value)
	{
		$sql = "SELECT * FROM `commodity` WHERE cName='$key'";
		$result = mysqli_query($link,$sql);
		$row = mysqli_fetch_array($result);
		$total = ($row["cPrice"])*$value;
		echo "商品名稱=".$key."數量=".$value."單品價格=".$row["cPrice"]."總價為=".$total."<br>";
	}

?>
	<input type="submit" value="返回" οnclick="location='index.php';" />
</form>