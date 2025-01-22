<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
3-make aCalculator that contain Basic Mathematical operations(+,-,*,/) -->

    <form action="Advanced3.php" method="get">

    <input type="number" name="num1"  required>
    <input type="number"  name="num2"  required>
    <select name="operation" required>
                <option value="">choose </option>
                <option value="+"> +</option>
                <option value="-"> -</option>
                <option value="*">* </option>
                <option value="/"> /</option>
            </select><br><br>
            <button type="submit">Calculate it</button>



    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operation = $_GET["operation"];
    $result = 0;
    switch ($operation) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
        default:
    }

    echo " $result";
}



?>
</body>
</html>