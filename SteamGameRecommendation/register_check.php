<?php 

require_once("mysql_con.php");

// 驗證註冊表單填寫狀況
// (性別, 年齡, 禮券收件地址, 暱稱姓氏, 學歷, 同意協議, steam帳號, fb帳號, email帳號, 密碼)
$reg_check = array(null, null, null, null, null, null, null, null, null, null, null);

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

// fb帳號檢查
if ($_POST['fb'] == null) {

$reg_check[7] = 0;

}else{

$reg_check[7] = 9;


}

// 註冊帳號填寫檢查
if ($_POST['re_username'] == null) {

$reg_check[8] = 0;

}else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['re_username'])) {

$reg_check[8] = 1;
	
}else{


// 預防SQL Injection
$re_username = mysqli_real_escape_string($conn, $_POST['re_username']);

$register_username_query = "SELECT username FROM user_account_table WHERE username = '$re_username'";

$username_result_data = mysqli_query($conn, $register_username_query);

$username_result_num = mysqli_num_rows($username_result_data);

 if (!$username_result_num  > 0) {
	

$reg_check[8] = 9;
    

 }else{

$reg_check[8] = 2;


  }


}
 
// 註冊密碼填寫檢查
if ($_POST['re_password'] == null) {

$reg_check[9] = 0;

}else{

$reg_check[9] = 9;

}








if ($reg_check[0] == 9 && $reg_check[1] == 9 && $reg_check[2] == 9 && $reg_check[3] == 9 && $reg_check[4] == 9 && $reg_check[5] == 9 && $reg_check[6] == 9 && $reg_check[7] == 9 && $reg_check[8] == 9 && $reg_check[9] == 9) {
	

// 預防SQL Injection
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$age = mysqli_real_escape_string($conn, $_POST['age']);

$zone_address = mysqli_real_escape_string($conn, $_POST['zone_address']);

$nickname = mysqli_real_escape_string($conn, $_POST['nickname']);

$career = mysqli_real_escape_string($conn, $_POST['career']);

$agree = mysqli_real_escape_string($conn, $_POST['agree']);

$steam_account = mysqli_real_escape_string($conn, $_POST['steam_account']);

$fb = mysqli_real_escape_string($conn, $_POST['fb']);

$re_password = md5(mysqli_real_escape_string($conn, $_POST['re_password']));

$career = mysqli_real_escape_string($conn, $_POST['career']);


// level判別
$level = '標準Steam玩家';

if ($steam_account != "有") {

	$level = '一般玩家';
}


// 記錄受測者註冊ip
$ip = null;

if (!empty($_SERVER["HTTP_CLIENT_IP"])){

    $ip = $_SERVER["HTTP_CLIENT_IP"];

}else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){

    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];

}else{

    $ip = $_SERVER["REMOTE_ADDR"];

}

// 將現在系統時間設定為台北時間
date_default_timezone_set('Asia/Taipei');

$now_time = date('Y/m/d H:i:s');

// 進行新會員資料寫入資料庫
$register_query = "INSERT INTO user_account_table(username,password,gender,nickname,age,level,agreement,career,steam_account,fb_account,address,ip,register_time) VALUES('$re_username','$re_password','$gender','$nickname','$age','$level','$agree','$career','$steam_account', '$fb','$zone_address','$ip','$now_time')";

mysqli_query($conn, $register_query);

   // 註冊成功與否狀態
   if (mysqli_affected_rows($conn) == 1) {

   $reg_check[10] = 9;



// 寄送帳號註冊成功通知信
require_once("sendmail_function.php");

$sender_email ='st937072015@gmail.com';
$sender_name = 'Steam社群平台遊戲推薦研究系統管理者';
$receiver_email = $re_username;
$receiver_name = $nickname . '，受測者';

$mail_subject = $nickname . '，受測者，您好！' . '非常感謝您！您的Steam社群平台遊戲推薦系統帳號已經完成註冊！';
$mail_content = $nickname . '，受測者，您好！' . '非常感謝您抽空願意來參與此研究之系統之受測，此研究受測系統將會花上您的一些時間，您的此次受測結果對於此研究將會是非常的重要，所以請務必用心與有耐心的完成此次受測，以上，非常感謝您！' . "<br><br><br>" . "以下為您的Steam社群平台遊戲推薦系統註冊帳號之資訊，請務必牢記您的帳號資訊：<br>帳號：".  $re_username . "<br>密碼：" . $_POST['re_password'] . "<br>性別：" . $gender . "<br>年齡：" . $age . "<br>暱稱：" . $nickname . "<br>禮券收件地址：" .$zone_address;



   sendmail($sender_email, $sender_name , $receiver_email, $receiver_name, $mail_subject, $mail_content);


	   
   echo json_encode($reg_check);


   }else{


   $reg_check[10] = 0;
   
   echo json_encode($reg_check);

   
   }



}else{


  echo json_encode($reg_check);

}


























?>