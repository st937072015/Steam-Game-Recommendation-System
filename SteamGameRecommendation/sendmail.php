<?php 

require_once("lib/PHPMailerAutoload.php");

$mail= new PHPMailer(); // 建立新物件        
$mail->IsSMTP(); // 使用SMTP寄信        
$mail->SMTPAuth = true; // SMTP需驗證        
$mail->SMTPSecure = "ssl"; // 使用SSL連線   
$mail->Host = "smtp.gmail.com"; // Gamil的SMTP主機        
$mail->Port = 465;  // Gamil的SMTP主機port。        
$mail->CharSet = "utf8"; // 設定郵件編碼        

$mail->Username = "xxxx"; // 設定寄送信件驗證帳號        
$mail->Password = "xxxx"; // 設定寄送信件驗證密碼        

// 收件人資訊(email, 收件人姓名)
$mail->setFrom('st937072015@gmail.com', 'Rock Huang');     

// 寄件人資訊(email, 寄件人姓名)
$mail->addAddress('st937072000@gmail.com', '黃梓瑞');

// 寄件主旨
$mail->Subject = 'PHPMailer sendmail test';


// 寄件內容(內文)
$mail->Body = 'This is a plain-text message body';


// Debug
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
 ?>