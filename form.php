<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نموذج PHP</title>
</head>
<body>
    <h1>نموذج PHP</h1>
    <form action="send_email.php" method="post">
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="message">الرسالة:</label>
        <br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" value="إرسال">
    </form>
</body>
</html>
