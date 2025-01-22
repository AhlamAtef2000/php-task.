<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
6-Determine page requested time. -->
<!-- <form action="Advanced6.php" method="POST">
<button type="submit">Submit</button>

</form> -->
    <?php
    $reaquesed_time=$_SERVER['REQUEST_TIME'];
    echo $reaquesed_time;

    //  or in this way    $requested_time_float = $_SERVER['REQUEST_TIME_FLOAT'];
    // echo $requested_time_float;
    ?>
</body>
</html>