<form action="secret.php" method="POST">
<?php
	session_start();			
	$cart = $_SESSION['cart'];	
	foreach($cart as $i=>$c){	
		
		echo "<input type='text' value='$i' name='d[]' />".$i.' 数量：'.$c."<br />";
	}
?>
	<input type="button" value="返回" οnclick="location='secret.php';" />
</form>