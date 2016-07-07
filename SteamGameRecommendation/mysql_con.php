<?php

// 設定資料庫參數

$Server_name = "localhost";
$server_user = "root";
$server_password = "5566898";
$server_dbname = "steam_recommendation";



$conn = @mysqli_connect($Server_name, $server_user, $server_password, $server_dbname);


if (mysqli_connect_errno($conn)) {

	die("connection_fail");

}

mysqli_set_charset($conn, "utf8");


?>