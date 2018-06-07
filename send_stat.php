<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 6/6/18
 * Time: 16:09
 */

require_once 'connection.php';
require 'class.phpmailer.php';
require 'Exception.php';
require 'class.smtp.php';

$link = mysqli_connect($host, $user, $password, $database);
$sql = "SELECT * FROM stat WHERE stat_date >= ( NOW() - INTERVAL 30 DAY)";
$result = mysqli_query($link, $sql);
$data = mysqli_fetch_all($result, 1);
$link->close();

$array = array();
foreach ($data as $item){
    $key = $item["stat_url"];
    if (array_key_exists($key, $array)) {
        $array[$key]++;
    } else {
        $array[$key] = 1;
    }
}

$message = "";
foreach ($array as $key => $item){
    $message .= "$key was visited $item times\n";
}

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "shiterartyom@gmail.com";
$mail->Password = "bayerngmail";

$mail->setFrom('shiterartyom@gmail.com','dd');
$mail->addAddress('shiterartyom@gmail.com');
$mail->Body = $message;

$mail->Subject = 'Statistics';
echo '<br>';
if(!$mail->send()) {
    echo 'Сообщение не отправлено.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Сообщение отправлено.';
}
$mail->SmtpClose();
