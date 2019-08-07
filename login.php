<?php
session_start();

//選擇登出加上signout判斷
if(isset($_GET["signout"])){
	unset($_SESSION["userName"]);
	//session_destroy();
	header("Location: index.php");
	exit();
}

//回首頁
if (isset($_POST["btnHome"]))
{
	header("Location: index.php");
	exit();
}

//session
if (isset($_POST["btnOK"]))
{
	require ("config.php");
	$account = $_POST['txtAccount'];
	$passWord = $_POST['txtPassword'];

	$sql = "SELECT * FROM userinfo where account = '$account'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_row($result);

	//echo var_dump($row); //測試陣列存放位置
	if ($account !=null && $passWord != null && $row[0]==$account  && $row[2] == $passWord)
	{
		//session_start();
		$_SESSION["userName"] = $account;
		header("Location: index.php");
		exit();
	}else{
		//密碼錯誤返回登入頁!
		echo "<script>alert('警告：密碼錯誤 返回登入頁!!'); location.href = 'login.php';</script>";
		exit();
	}
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Lab - Login</title>
</head>
<body>
	<form id="form1" name="form1" method="post" action="">
		<table width="300" border="0" align="center" cellpadding="5"
			cellspacing="0" bgcolor="#F2F2F2">
			<tr>
				<td colspan="2" align="center" bgcolor="#CCCCCC"><font
					color="#FFFFFF">會員系統 - 登入</font></td>
			</tr>
			<tr>
				<td width="80" align="center" valign="baseline">帳號</td>
				<td valign="baseline"><input type="text" name="txtAccount"
					id="txtAccount" /></td>
			</tr>
			<tr>
				<td width="80" align="center" valign="baseline">密碼</td>
				<td valign="baseline"><input type="password" name="txtPassword"
					id="txtPassword" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center" bgcolor="#CCCCCC"><input
					type="submit" name="btnOK" id="btnOK" value="登入" /> <input
					type="reset" name="btnReset" id="btnReset" value="重設" /> <input
					type="submit" name="btnHome" id="btnHome" value="回首頁" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
