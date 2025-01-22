<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 4. determine the project name, and script name -->

<form action="Advanced5.php" method="POST">
<button type="submit">determine the project name,and script name </button>




</form>
    <?php
    $script_name = basename($_SERVER['PHP_SELF']);
    // الحصول على اسم المشروع (اسم المجلد)
    $project_name = basename(dirname($_SERVER['PHP_SELF']));
    echo "$script_name";
    echo "$project_name";
    ?>

</body>
</html>