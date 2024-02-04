<?php

// استلام البيانات من النموذج
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// تهيئة الرسالة البريدية
$to = "ossamadarouiche@gmail.com"; // البريد الإلكتروني الذي ستستلم عليه الرسالة
$subject = "New Form Submission";
$message = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;

// إرسال البريد الإلكتروني
mail($to, $subject, $message);

// إعادة توجيه المستخدم إلى صفحة شكر
header("Location: thank_you.html");

?>
