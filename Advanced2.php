<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
2make asearch engine website that contain URL as input text and button named (GO) if you click on Go
will redirect you to the written URL  -->

<form action="Advanced2.php"method="POST">
            <input type="text" name="url" required>
            <br>
            <br>
            <button type="submit">GO</button>
        </form>
<?php
//التحقق من أن المستخدم قد أدخل رابط
if (isset($_POST['url']) && !empty($_POST['url'])) {
    $url = $_POST["url"];
    // التأكد من أن الرابط يبدأ بـ http:// أو https://
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // إعادة التوجيه إلى URL الذي أدخله المستخدم
        header("Location: $url");
        exit(); // التأكد من توقف الكود بعد التوجيه
    } else {
        echo "<p>enter a vaild url</p>";
    }
} else {
    echo "<p>entere your url</p>";
}


?>
</body>
</html>