<?php 

require_once("mysql_con.php");

// <接收要重設密碼的帳號--------------------------------------------------------------------------------------------------->

// 防止SQL Injection
$email_reset = mysqli_real_escape_string($conn, $_POST['for_email']);

// 確認電子郵件帳號是否有註冊已存在
$exist_check_query = "SELECT username, nickname, pass_reset FROM user_table WHERE username = '$email_reset'";

$result_data = mysqli_query($conn,$exist_check_query);

// 判斷接收過來的參數條件
if ($email_reset == null && isset($_POST['for_email'])) {

   echo 'email_empty';

}else if (isset($_POST['for_email']) && !isset($_GET['reset_key']) && mysqli_num_rows($result_data) == 1) {


$row = mysqli_fetch_array($result_data);


// 判斷是否已經要求過重置密碼
if ($row['pass_reset'] == "無") {
	
   // 產生的雜湊連結
$reset_index = md5($row['username']) . md5(date('Y/m/d')) . md5(date('h:i:sa'));

// 寫入帳號密碼重置get雜湊連結
$reset_query = "UPDATE user_table SET pass_reset = '$reset_index' WHERE username = '$email_reset'";



// 重置key是否順利寫入資料庫
if (mysqli_query($conn,$reset_query)) {





// 寄送帳號重置通知信
require_once("sendmail_function.php");

$sender_email ='st937072015@gmail.com';
$sender_name = 'Steam社群平台遊戲推薦系統管理者';
$receiver_email = $row['username'];
$receiver_name = $row['nickname'] . '，受測者';



$mail_subject = $row['nickname'] . '，受測者，您好！' . '此封信為您的Steam社群平台遊戲推薦系統帳號密碼重置重要通知信！';
$mail_content = $row['nickname'] . '，受測者，您好！' . "以下為您的Steam社群平台遊戲推薦系統帳號之密碼重置連結，請點擊後前往進行密碼重置，謝謝！：<br><br>" . "<a href='".'http://140.127.220.216/SteamGameRecommendation/password_initial.php?reset_key='. $reset_index ."'>請點擊此連結以進行密碼重置</a>";



 sendmail($sender_email, $sender_name , $receiver_email, $receiver_name, $mail_subject, $mail_content);


 
 echo 'reset_email_send_success';


}else{


 echo 'reset_email_send_fail';


}







}else{


 echo 'reset_email_send_already';



}





	
}else if(isset($_POST['for_email']) && !isset($_GET['reset_key']) && mysqli_num_rows($result_data) == 0){

   echo'email_not_exist';
   

}


// <接收重設密碼雜湊文字--------------------------------------------------------------------------------------------------->

/*else if () {



// <其他皆非法--------------------------------------------------------------------------------------------------->
}else{






}


*/









?>