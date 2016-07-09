<?php 

require_once("mysql_con.php");


// 驗證註冊表單填寫狀況
$reg_check = array(null, null, null, null, null, null, null, null, null, null);

// 性別驗證
if ($_POST['gender'] == null) {
	
$reg_check[0] = 0;

}else if (!strcmp($_POST['gender'],"男") == 0 && !strcmp($_POST['gender'],"女") == 0) {
	
$reg_check[0] = 1;


}else{


$reg_check[0] = 9;

}

// 年齡驗證
if ($_POST['age'] == null) {

$reg_check[1] = 0;

}else if ((int)$_POST['age']  < 20 || (int)$_POST['age'] >= 100 || !is_int((int)$_POST['age'])) {

$reg_check[1] = 1;

}else{

$reg_check[1] = 9;


}

// 家樂福禮券收件地址
if ($_POST['zone_address'] == null) {

$reg_check[2] = 0;

}else{

 $reg_check[2] = 9;


}

// 收件人暱稱姓氏檢查
if ($_POST['nickname'] == null) {

$reg_check[3] = 0;

}else{

$reg_check[3] = 9;

}

// 學歷檢查
if (!strcmp($_POST['career'],"高中") == 0 && !strcmp($_POST['career'],"大學") == 0 && !strcmp($_POST['career'],"研究所以上") == 0 ) {

$reg_check[4] = 0;

}else{

$reg_check[4] = 9;

}

// 同意協議
if (!strcmp($_POST['agree'],"是") == 0) {

$reg_check[5] = 0;

}else{

$reg_check[5] = 9;

}

// steam帳號填寫檢查
if (!strcmp($_POST['steam_account'],"有") == 0 && !strcmp($_POST['steam_account'],"無") == 0) {

$reg_check[6] = 0;

}else{


$reg_check[6] = 9;

}

// 註冊帳號填寫檢查
if ($_POST['re_username'] == null) {

$reg_check[7] = 0;

}else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['re_username'])) {

$reg_check[7] = 1;
	
}else{


// 預防SQL Injection
$re_username = mysqli_real_escape_string($conn, $_POST['re_username']);

$register_username_query = "SELECT username FROM user_table WHERE username = '$re_username'";

$username_result_data = mysqli_query($conn, $register_username_query);

$username_result_num = mysqli_num_rows($username_result_data);

 if (!$username_result_num  > 0) {
	

$reg_check[7] = 9;
    

 }else{

$reg_check[7] = 2;


  }


}
 
// 註冊密碼填寫檢查
if ($_POST['re_password'] == null) {

$reg_check[8] = 0;

}else{

$reg_check[8] = 9;

}






if ($reg_check[0] == 9 && $reg_check[1] == 9 && $reg_check[2] == 9 && $reg_check[3] == 9 && $reg_check[4] == 9 && $reg_check[5] == 9 && $reg_check[6] == 9 && $reg_check[7] == 9 && $reg_check[8] == 9) {
	

// 預防SQL Injection

$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$age = mysqli_real_escape_string($conn, $_POST['age']);

$zone_address = mysqli_real_escape_string($conn, $_POST['zone_address']);

$nickname = mysqli_real_escape_string($conn, $_POST['nickname']);

$career = mysqli_real_escape_string($conn, $_POST['career']);

$agree = mysqli_real_escape_string($conn, $_POST['agree']);

$steam_account = mysqli_real_escape_string($conn, $_POST['steam_account']);

$re_password = md5(mysqli_real_escape_string($conn, $_POST['re_password']));


// level判別
$level = '標準Steam玩家';

if (!$steam_account == "有") {

	$level = '一般玩家';
}



// 進行新會員資料寫入資料庫
$register_query = "INSERT INTO user_table(username,password,gender,age,level,agreement,steam_account,address) VALUES('$re_username','$re_password','$gender','$age','$level','$agree','$steam_account','$zone_address')";

   // 註冊成功與否狀態
   if (mysqli_query($conn, $register_query)) {

   $reg_check[9] = 9;
	   
   echo json_encode($reg_check);

   }else{

   $reg_check[9] = 0;
   
   echo json_encode($reg_check);
   
   }



}else{


  echo json_encode($reg_check);

}


























?>