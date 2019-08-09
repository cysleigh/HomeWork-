<?php 
  //改成session
  session_start();
  if (!isset($_SESSION["userName"]))
  {
  	header("Location: login.php");
  	exit();
  }

  require ("config.php");
  $sql = "SELECT * FROM commodity";
	$result = mysqli_query($link,$sql);
  //$row = mysqli_fetch_row($result);
  
  //echo var_dump($row);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - shop Page</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 － 會員專用</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline">Welcom!! <?= $_SESSION["userName"]?></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">
      <a href="index.php">回首頁</a>
      <a href="index.php">回首頁</a>
    </td>
    
  </tr>
</table>
<?php while($row = mysqli_fetch_array($result)) {?>
  <div style="display:inline-block;margin-left:5%;margin-top:10%;border-width:3px;border-style:dashed;border-color:#FFAC55;">
  <img src="image/<?php echo$row['cPicture'] ?>" class="employee-pic" width="100" />
  <h3>商品名稱: <?php echo $row["cName"] ?></h3>
  <p>商品售價: <?php echo $row["cPrice"] ?>元</p>
  <!-- <form action="" method="get">
  <input name= "amount" type="number" > -->
  <!-- <input id="item" class="product_bt" style="cursor: pointer;" 
    onclick="location='shoppage.php?nb=<?= $row['cid'] ?>&cName=<?= $row['cName']?>';"
    value="加入購物車" type="submit" /> -->
  <a href="shoppage.php?nb=<?= $row['cid'] ?>&cName=<?= $row['cName']?>&num=1">加入購物車</a>
  <!-- </form> -->
 
    
  </div>
<?php } ?>

</body>
</html>