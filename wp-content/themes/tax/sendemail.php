<?php
error_reporting( E_ERROR );

$sendto  = strip_tags(trim($_POST['sendto']));//Адреса, куда будут приходить письма

$email  = strip_tags(trim($_POST['email']));
$name  =  strip_tags(trim($_POST['name']));
$text  =  strip_tags(trim($_POST['text']));

$phone  =  strip_tags(trim($_POST['phone']));

$order  =  strip_tags(trim($_POST['order']));
$source =  strip_tags(trim($_POST['source']));
$check_email_delivery =  strip_tags(trim($_POST['check-email-delivery']));

// Формирование заголовка письма

$subject  = '[Новая заявка - Tax.ua]';
/*$headers  = "From: ".$name." \r\n";
$headers .= "Reply-To: ". strip_tags($name) . "\r\n";*/
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка - Tax.ua</h2>\r\n";
if(!empty($name)) {
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
}

if(!empty($email)) {
    $msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
}

if(!empty($phone)){
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
}

if(!empty($text)) {
    $msg .= "<p><strong>Текст:</strong> ".$text."</p>\r\n";
}

$msg .= "<p><strong>Форма:</strong> ".$order."</p>\r\n";
$msg .= "<p><strong>Источник:</strong> ".$source."</p>\r\n";
$msg .= "</body></html>";

if((!empty($email) && !empty($name)) || (!empty($name) && !empty($phone)) || (!empty($check_email_delivery) && !empty($email)))
{
//     отправка сообщения
    if(mail($sendto, $subject, $msg, $headers)) {
        $result = 1;
        echo json_encode($result);
    } else {
        $result = 0;
        echo json_encode($result);
    }
}

else {
    $result = 0;
    echo json_encode($result);
}
?>