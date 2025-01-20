<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function checkprime($number) {
    if ($number <= 1) {
        return "$number is not a prime number.";
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return "$number is not a prime number."; 
        }
    }
    return "$number is a prime number.";
}

$number = 3;
echo checkprime($number);
echo "<br>";





// 2.	Write a PHP script to reverse a string 

// Sample Input:  remove
// Expected Output: evomer

$string="remove";
echo(strrev($string));
echo"<br>";

// 3.	 Write a PHP script to check if the all string characters are lower cases

// Sample Input:  remove
// Expected Output: Your String is Ok 
$string = "remove";
if (ctype_lower($string)) {
    echo "Your String is Ok ";
} else {
    echo "Your String is not Ok ";
    echo"<br>";
}

// 4.	Write a PHP function to swap to variables?

// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10 

$x=12;
$y=10;

$r=$y;
$y=$x;
$x=$r;

echo"<br>";
echo($y);
echo($x);

echo"<br>";

// 5.	Write a PHP function to swap to variables?

// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10 

$x=12;
$y=10;

$r=$y;
$y=$x;
$x=$r;

echo"<br>";
echo($y);
echo"<br>";
echo($x);
echo"<br>";



//     while($x != 0) 
//     { 
//         $rem = $x % 10; 
//         $sum = $sum + $rem * $rem * $rem; 
//         $x = intval($x / 10);  // تحويل النتيجة إلى عدد صحيح
//     } 
    
//     // if true then armstrong number
//     if ($number == $sum)
//         return 1;
    
//     // not an armstrong number 
//     return 0; 
// }

// // Driver Code
// $number = 407;
// $flag = armstrongCheck($number);
// if ($flag == 1)
//     echo "Yes";
// else

// 6.	Write a PHP function to check if a number is an Armstrong number or not ?
// **Armstrong number is a number that is equal to the sum of cubes of its digits.

// Sample Input:  407
// Expected Output: 407 is Armstrong Number 

function armstrongCheck($number) {
    $digits = str_split($number);
    $sum = 0;
    $numDigits = count($digits); 
    foreach ($digits as $value) {
        $sum += pow($value, $numDigits); 
    }
    if ($sum == $number) {
        return "$number is Armstrong Number ";
    } else {
        return "No";
    }
}
$number = 407;
echo armstrongCheck($number); 

echo"<br>";
//7
function palindrome($string) {
    $string = trim($string);
    $Stringre = strtolower(preg_replace("/[^a-z0-9]/", "", $string));
    $reversedString = strrev($Stringre);
    if ($reversedString === $Stringre) {
        return "Yes it is a palindrome";
    } else {
        return "No it isn't a palindrome";
    }
}

$string = " Eva, can I see bees in a cave?";  // لا مشكلة مع المسافة هنا
echo palindrome($string);  
echo"<br>";

// 8.	Write a PHP function to remove duplicates from an array ?

// Sample Input:  

// $array1 = array(2, 4, 7, 4, 8, 4);


// Expected Output:

// $array1 = array(2, 4, 7, 8);

$array1 = array(2, 4, 7, 4, 8, 4);
//array_unique delete duplicate num in array
$array1= array_unique($array1);
print_r($array1);
//print -r to show our 
echo"<br>";

?>
</body>
</html>