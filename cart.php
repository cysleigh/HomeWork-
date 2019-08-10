


<h2>購物車中有以下商品：</h2>
<table cellpadding="0" cellspacing="0" border='1' width="100%">
<tr>
<td style='width:10%'>編號</td>
<td style='width:18%'>商品名稱</td>
<td style='width:18%'>商品單價</td>
<td style='width:18%'>購買數量</td>
<td style='width:18%'>數量價格</td>
<td style='width:18%'>操作</td>
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
		$i=1;
		foreach($arr as $key=>$value){
			$sql = "SELECT * FROM `commodity` WHERE cName='$key'";
			$result = mysqli_query($link,$sql);
			$row = mysqli_fetch_array($result);
			$total = ($row["cPrice"])*$value; //單品項價總和
			echo "<table cellpadding='0' cellspacing='0' border='1' width='100%'>
				<tr>
				<td style='width:10%'>".$i."</td>
				<td style='width:18%'>".$key."</td>
				<td style='width:18%'>".$row["cPrice"]."</td>
				<td style='width:18%'>$value</td>
				<td style='width:18%'>$total</td>
				<td style='width:18%'><a href='delect.php?del={$key}'>刪除</a></td>
				</tr>
				</table>";
			$i++;
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
