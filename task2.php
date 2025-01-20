<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1
    function leapYear( $myYear){
        if( $myYear%400==0){
            echo("It is a leap year");
        }
        elseif($myYear%100==0){
            echo("It's not a leap year");
        }
        elseif($myYear%4==0){
            echo("It is a leap year");
        }
        
        else
        echo("It's not a leap year");
    }
    $myYear=2013;
    echo(leapYear( $myYear));

    echo"<br>";

    //2

    function checksesson($temeprature){
        if($temeprature<20){
            print("we are in winter");
        }

        else
        print("the season is summer");

    }
    $temeprature=27;
    echo( checksesson($temeprature));
    echo"<br>";


    //3
    function sum($firstinteger,$secondinteger){

    if($firstinteger==$secondinteger){
        return($firstinteger+$secondinteger)*3;
    }
    else
    return $firstinteger+$secondinteger;
    }
    $firstinteger=2;
    $secondinteger=2;
    echo(sum($firstinteger,$secondinteger));
    echo"<br>";

    //4
    function checksum($num1,$num2){
        if($num1 + $num2 == 30){
            return $num1+$num2;
        }
        else
        return "false";
    }
    $num1=40;
    $num2=30;
    echo(checksum($num1,$num2));
    echo"<br>";

    //5
    function ismultinumber($num){
        if($num%3==0 &&$num>0){
            return "true";
        }
        else
        return "false";
    }
    $num=20;
    echo(ismultinumber($num));
    echo"<br>";

    //6
    
    function checkint($numint){
    if ($numint>=20 && $numint <= 50){
        return "true";
    }
    else
    return "false";

    }
    $numint=50;
    echo(checkint($numint));
    echo"<br>";

    //7
    function findLargest($num1, $num2, $num3) {
        if ($num1>= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2>= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }
    $num1=1;
    $num2=5;
    $num3=9;
    echo(findLargest($num1, $num2, $num3));
    echo"<br>";
//$array=[1,5,9];
//echo max(array);

    //8
    function calcelec($range){
    $rate1=2.50;
    $rate2=5.00;
    $rate3=6.20;
    $rate4=7.50;
    if ($range<=50) {
        return $range * $rate1;  
    } elseif ($range <= 150) {
        return (50 * $rate1) + (($range - 50) * $rate2); 
    } elseif ($range <= 250) {
        return (50 * $rate1) + (100 * $rate2) + (($range - 150) * $rate3); 
    } else {
        return (50 * $rate1) + (100 * $rate2) + (100 * $rate3) + (($range - 250) * $rate4);  
    }

    }


    //9


    class calc{
        public function add($num1,$num2){
            return $num1+$num2;
        }

        public function subtract($num1,$num2){
            return $num2-$num1;
        }
        
        public function Multiplication($num1,$num2){
            return $num1*$num2;
        }
        
        public function Division($num1,$num2){
            return ($num2%$num1==0 );
        }


    }
    $num1=20;
    $NUM2=24;
    
    //10
function checkEToVote($age) {
    if ($age >= 18) {
        return "Eligible to vote";//بقدر يصوت  
    } else {
        return "Not eligible to vote"; 
    }
}

$age = 15; 
echo ( checkEToVote($age));
echo"<br>";



// 11.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

function check($num){
    if($num>0){
        return"positive";
    }
    elseif($num==0){
        return"zero";
    }
    else
    return"Negative";
}
$num=-60;
echo ( check($num));
echo"<br>";


// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’


function getGrade($scores) {
    $average = array_sum($scores) / count($scores);
    switch (true) {
        case ($average < 60):
            return "F";
            break;
        case ($average < 70):
            return "D";
            break;
        case ($average < 80):
            return "C";
            break;
        case ($average < 90):
            return "B";
            break;
        case ($average < 100):
            return "A";
            break;
        default:
            return "Invalid grade";  
    }
}

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

echo (getGrade($scores)); // Output: D
echo"<br>";
// لو رتبتهم بالعكس كان طلع كلو A



// task 8 




// $rule=10;
// $unit1 = $rule2.5;
// $unit2 = $rule5.00;
// $unit3= $rule6.20;
// $unit4= $rule7.50;

// if ($rule<=50){
//   echo $unit1;
// }
// else if ($rule>50 && $rule<=100){
//   echo $unit2;
// }
// elseif ($rule>100 && $rule<=250){
//   echo $unit3;
// }
// else {
//   echo $unit4;
// }

?>


    
</body>

</html>