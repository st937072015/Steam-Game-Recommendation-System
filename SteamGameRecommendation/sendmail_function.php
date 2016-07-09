<?php 

require_once("lib/PHPMailerAutoload.php");

function sendmail($sender_email, $sender_name, $receiver_email, $receiver_name, $mail_subject, $mail_content){




$mail= new PHPMailer(); // 建立新物件        
$mail->IsSMTP(); // 使用SMTP寄信
$mail->IsHTML(true); // 允許以html形式寄信
$mail->SMTPAuth = true; // SMTP需驗證        
$mail->SMTPSecure = "ssl"; // 使用SSL連線   
$mail->Host = "smtp.gmail.com"; // Gamil的SMTP主機        
$mail->Port = 465;  // Gamil的SMTP主機port。        
$mail->CharSet = "utf8"; // 設定郵件編碼        

$mail->Username = "xxxx"; // 設定寄送信件驗證帳號        
$mail->Password = "xxxx"; // 設定寄送信件驗證密碼        

// 寄件人資訊(email, 收件人姓名)
$mail->setFrom($sender_email, $sender_name);     

// 收件人資訊(email, 寄件人姓名)
$mail->addAddress($receiver_email, $receiver_name);

// 寄件主旨
$mail->Subject = $mail_subject;


// 寄件內容(內文)
$mail->Body = $mail_content;

// 寄送郵件
$mail->send();


/*
// Debug
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

*/



}





 ?>