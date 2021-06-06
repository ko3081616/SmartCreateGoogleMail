<?php
$to_email = "ko3081616@gmail.com";
$subject = "智創生活科技";

$body = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
<style>
    #email-wrap {
    background: #151515;
    color: #FFF;
    }
</style>
</head>
<body>
    <div id="email-wrap">
    <p>您好,</p><br>
    <p>寶熊漁樂的顧客您好.</p><br>
    <p>以下是您的密碼重新設定連結,</p>
    <p><a href="https://smartcreating.com/home/">重新設定密碼</a></p>
    </div>
</body>
</html>
    ';
$headers = "From: 智創生活科技" . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
