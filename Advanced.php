<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="Advanced.php" method="Post">
<!-- form action="Advanced.phpاسم الفايل تبعي الي بدي اقرأ منو -->
<label for="email">Email</label>
<input type="text" id="email" name="email" required />
<br>
<br>
<label for="pass">password</label>
<input type="password" id="pass" name="pass" required/>
<button type="submit">submit</button>
</form>


    <?php



// 1 create a form and send email and password , in the action page you will determine if the data is sent by get or
// post 


// echo $_SERVER["SERVER_NAME"];
// echo $_SERVER["REQUEST_METHOD"];

// $errors = [];

// if (!empty($_POST)) {
//   $pass = $_POST['pass'];
//   $email = $_POST['email'];
//   if (empty($pass)) {
//       $errors[] = 'pass is empty';
//   }

//   if (empty($email)) {
//       $errors[] = 'Email is empty';
//   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $errors[] = 'Email is invalid';
//   }

// }
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     // $email=htmlspecialchars($_POST["email"]) ;
//     // $password=htmlspecialchars($_POST["pass"]);
//     echo $_POST["email"] ;


// }
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo $_POST["email"] ;
    echo"<br>";
    echo $_POST["pass"] ;


}
// Check if the form was submitted using GET
elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Collect and sanitize the input values (if any)
    $email = htmlspecialchars($_GET["email"]);
    $password = htmlspecialchars($_GET["pass"]);

    echo "<h1>GET Request</h1>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Password:" . $password . "</p>";
} else {
    echo "No data received.";
}

// make asearch engine website that contain URL as input text and button named (GO) if you click on Go
//  will redirect you to the written URL









    ?>
</body>
</html>