<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
// start and end position.  
// Expected Output: 1-2-3-4-5-6-7-8-9-10
echo "<br>"; 
    for($i=1;$i<=10;$i++){

        if($i<10){
        echo $i ."-";
    }
        else
        echo $i;

}
    echo"<br>";



    // 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.  

    // Expected Output:  total as a number 
    echo "<br>"; 
    $sum = 0; 
    
    
    for ($i = 0; $i <= 30; $i++) {
        $sum += $i; 
    }
    
    echo "Total as: " . $sum;
    echo"<br>";
//     3. Create a script to generate the following pattern, using the nested for loop.  
// Expected Output: 

// A A A A A  
// A A A B B  
// A A C C C  
// A D D D D  
// E E E E E



echo "<br>"; 
$row=5;
for($i=0;$i<$row;$i++){
    for($j=0;$j<$row;$j++){
    if($j<$row-$i-1){
        echo "A";
    }
    else{
    echo chr(65+ $i) . " ";
    } 
    } 
echo "<br>"; 
}
















    //4


    $row=5;
    $num=1;
    for($i=0;$i<$row;$i++){
    for($j=0;$j<$row;$j++){
        if($j<$row-$i-1){
            echo $num . " ";
        }
        else{
            echo $num +$i . " ";
        }
    }
    echo "<br>";
    }

    //5


    $row=5;
$num=1;
for($i=0;$i<$row;$i++){
for($j=0;$j<$row;$j++){
if($j==$i){
echo $num+$i . " ";
}
else{
    echo "0" . " ";
}
}
echo "<br>";
}

//6
// Function to calculate the factorial of a number
function factorial($number) {
    $result = 1;  // Initialize result as 1 (since the factorial of 0 is 1)

    // Loop from 1 to the number
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;  // Multiply result by the current value of i
    }

    return $result;  // Return the calculated factorial
}

// Sample input
$number = 5;
echo "The factorial of $number is: " . factorial($number);



echo"<br>";


// 7. Write a program to calculate and print the Fibonacci sequence using a for loop. 
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting 
// with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.  

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … 

// Function to print Fibonacci sequence up to a certain count
function printFibonacci($count) {
    $a = 0; // First Fibonacci number
    $b = 1; // Second Fibonacci number

    // Loop to generate the Fibonacci sequence
    for ($i = 0; $i < $count; $i++) {
        echo $a;  // Print the current Fibonacci number
        if ($i < $count - 1) {
            echo ", ";  // Print comma between numbers
        }
        
        // Update values of $a and $b to the next Fibonacci numbers
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}

// Sample input: Number of terms in the Fibonacci sequence
$count = 10;  // You can change this to generate more or fewer terms
echo "The first $count numbers in the Fibonacci sequence are: ";
printFibonacci($count);

echo"<br>";



// 8. Write a program which will count the "c" characters in the text "Orange Coding Academy".  
 
// Sample Input: Orange Coding Academy 
// Expected Output: 2


echo"<br>";

// Define the string
$text = "Orange Coding Academy";

// Convert the text to lowercase to make the search case-insensitive
$text = strtolower($text);

// Count the number of occurrences of the character "c"
$count = substr_count($text, 'c');

// Print the result
echo " $count ";
echo"<br>";




//9
// Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and 
// cell spacing="0px" to the table tag.  

echo "<table cellpadding='3px' cellspacing='0px' border='1'>"; // Start table with cellpadding and cellspacing

// Outer loop for rows (1 to 6)
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>"; // Start a new row
    // Inner loop for columns (1 to 5)
    for ($j = 1; $j <= 5; $j++) {
        // Calculate the product
        $result = $i * $j;
        echo "<td>" . $i . " * " . $j . " = " . $result . "</td>"; // Display the multiplication
    }
    echo "</tr>"; // End the row
}

echo "</table>"; // End the table



echo"<br>";




// 10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" 
// instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of 
// both three and five, print "FizzBuzz". 
echo"<br>";

// Loop through numbers from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    // Check if the number is a multiple of both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    }
    // Check if the number is a multiple of 3
    else if ($i % 3 == 0) {
        echo "Fizz ";
    }
    // Check if the number is a multiple of 5
    else if ($i % 5 == 0) {
        echo "Buzz ";
    }
    // If none of the above, print the number itself
    else {
        echo $i . " ";
    }
}

echo"<br>";




// 11. Write a PHP program to generate and display the first n lines of a Floyd triangle 
 
// According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer 
// science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive 
// numbers, starting with a 1 in the top left corner: 
 
// Sample output: 
// 1 
// 2 3 
// 4 5 6 
// 7 8 9 10 
// 11 12 13 14 15 

echo"<br>";

// Function to generate Floyd's Triangle
function floydsTriangle($n) {
    $num = 1; // Initialize the first number to be printed
    
    // Outer loop for each row
    for ($i = 1; $i <= $n; $i++) {
        // Inner loop to print numbers in each row
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";  // Print the current number
            $num++;  // Increment the number for the next one
        }
        echo "<br>";  // New line after each row
    }
}

// Sample Input
$n = 5;  // You can change this value to generate more or fewer rows
floydsTriangle($n);




echo"<br>";







// 12. Write a PHP program to print the following pattern.  
    
// Expected Output: 

//      A  
//     A B  
//    A B C  
//   A B C D  
//  A B C D E  
//   A B C D  
//    A B C  
//     A B  
//      A 
echo "<br>";
// Function to print the pattern
// function printPattern($n) {
//     // Upper half of the pattern
//     for ($i = 1; $i <= $n; $i++) {
//         // Print leading spaces
//         for ($j = 1; $j <= $n - $i; $j++) {
//             echo " ";
//         }

//         // Print letters from A to the current letter
//         for ($j = 1; $j <= $i; $j++) {
//             echo chr(64 + $j) . " ";
//         }
        
//         // Move to the next line
//         echo "<br>";
//     }

//     // Lower half of the pattern
//     for ($i = $n - 1; $i >= 1; $i--) {
//         // Print leading spaces
//         for ($j = 1; $j <= $n - $i; $j++) {
//             echo " ";
//         }

//         // Print letters from A to the current letter
//         for ($j = 1; $j <= $i; $j++) {
//             echo chr(64 + $j) . " ";
//         }
        
//         // Move to the next line
//         echo "<br>";
//     }
// }

// Sample Input
// $n = 5; // You can change this value for different size patterns
// printPattern($n);


$letters = str_split("ABCDE");
$total = count($letters);
echo "<pre>";
for ($i = 1; $i <= $total; $i++) {
    $index = 0;
    for ($j = 1; $j <= $total; $j++) {
        if ($j < $total - $i + 1) {
            echo " ";
        } else {
            echo $letters[$index] . " ";
            $index++;
        }
    }
    echo "<br>";
    if ($i == $total) {
        for ($k = $total - 1; $k >= 1; $k--) {
            $index = 0;
            for ($l = 1; $l <= $total; $l++) {
                if ($l < $total - $k + 1) {
                    echo " ";
                } else {
                    echo $letters[$index] . " ";
                    $index++;
                }
            }
            echo "<br>";
        }
    }
}
?>


</body>
</html>