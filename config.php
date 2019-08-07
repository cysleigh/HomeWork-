<?php
	//建立資料庫連線PHP
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'homeworkphp';

	$link = mysqli_connect ( $dbhost, $dbuser, $dbpass ) or die ( mysqli_connect_error() );
	$result = mysqli_query ( $link, "set names utf8" );
	mysqli_select_db ( $link, $dbname );
?>