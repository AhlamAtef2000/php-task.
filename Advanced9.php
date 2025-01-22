<!-- Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure],
    [httponly] . Then Retrieve all cookies value after that delete the cookies . -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    setcookie("User","Ahlam",time()+86400,"/" ,"",true,true);
    //في حال بدي احذف بس بحط_فيTIME
    if(isset($_COOKIE["User"]) )
    {
    echo $_COOKIE["User"];
    }
    
    else 
    {
        echo "isnot found";
    }
    

    
    ?>
</body>
</html>