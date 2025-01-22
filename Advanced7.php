<!-- makeawebsite counter on refresh  -->
<?php
// بدء الجلسة لتخزين العداد
session_start();
// إذا كانت الجلسة لا تحتوي على عداد، نبدأ من 0
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}
// زيادة العداد مع كل تحميل أو تحديث للصفحة
$_SESSION['counter']++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Refresh Counter</title>
</head>
<body>
<p>This page has been refreshed <?php echo $_SESSION['counter']; ?> times.</p>

</body>
</html>
