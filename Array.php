<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

//     1.	Write a script to generate the following paragraph 
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from the $colors array.

$colors =array("red","green","white");
$par="The memory of that scene for me is like a frame of film forever frozen at that moment:
the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. 
The new president and his first lady. - Richard M. Nixon";

echo $par;
echo"<br>";

// 2.	$colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list :
// Expected Output:  
// ●	green
// ●	red
// ●	white

echo"<br>";
        $colors = array('white', 'green', 'red') ;
        echo"<li>
        green
        </li>";
        echo"<li>
        red
        </li>";
        echo"<li>
        white
        </li>";


        echo"<br>";


//  3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
echo 'The capital of  Netherlands is   ' . $cities['Netherlands'];
echo"<br>";
echo 'The capital of  Greece is   ' . $cities['Greece'];
echo"<br>";
echo 'The capital of Germany  is    ' . $cities['Germany'];
echo"<br>";
//anther solution
// foreach($cities as $country=>$capital){
//     echo 'The capital of'. $country . ' is ' . $capital;
//     echo "<br>";
// }


// 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to display the first element of the above array. 
// Expected Output:  white
echo"<br>";
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
//another soultion  
// echo reset($color);
echo"<br>";

// 5.	Write a PHP script that inserts a specific new item in an array in any position.
// Sample Input:

// Array 1 2 3 4 5   
// Location: 4
// New Item: $

// Expected Output: 1 2 3 $ 4 5
echo"<br>";
$array=[1 ,2 ,3, 4, 5];
$location =3;
$newItem ='$'; 
array_splice($array,$location,0,$newItem);
//array-splice اضافة او حف عناصر و0 انه لا يوجد حذف
echo implode(" ", $array); 
echo"<br>";

// 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange
echo"<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $y => $y_value){
    
    echo $y . " =  " . $y_value . "";
    echo"<br>";
}
echo"<br>";

// 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,

echo"<br>";

$Temperature=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$AverageTemp=array_sum($Temperature)/count($Temperature);
sort($Temperature);
$lowestTemperatures = array_slice($Temperature, 0, 7);
$highestTemperatures = array_slice($Temperature, -7);
echo "Average Temperature is:". $AverageTemp;
echo"<br>";
echo"List of seven lowest temperatures:".implode(", ",$lowestTemperatures);
echo"<br>";
echo"List of seven highest temperatures:".implode(", ",$highestTemperatures);

echo"<br>";



// 8.	Write a PHP program to merge the following two arrays. 

// Sample Input: 

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Expected Output:

// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )


echo"<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid",4);
$mergedArray=array_merge($array1,$array2);
echo "<pre>";
print_r ($mergedArray);
echo "<pre>";
echo"<br>";


// 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

// Sample Input:

// $colors = array("red","blue", "white","yellow");

// Expected Output :

// Array
// (
//     RED
//     BLUE
//     WHITE
//     YELLOW

// )

echo"<br>";
$colors = array("red","blue", "white","yellow");
$uppercaseColors = array_map('strtoupper', $colors);
print_r($uppercaseColors);
echo"<br>";


// 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

// Sample Input:

// $colors = array("RED","BLUE", "WHITE","YELLOW");

// Expected Output :

// Array
// (
//     red
//     blue
//     white
//     yellow

// )
echo"<br>";
$colors = array("RED","BLUE", "WHITE","YELLOW");
$lowercaseColors=array_map('strtolower',$colors);
print_r($lowercaseColors);
echo"<br>";


// 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

for($num=200;$num<=250;$num++){
    if ($num%4==0){
echo $num ."  ";
    }
}
echo"<br>";

// 12.	Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.
$words =  array("abcd","abc","de","hjjj","g","wer");
$shortestLength = min(array_map('strlen', $words));
$longestLength = max(array_map('strlen', $words));
echo"The shortest array length is $shortestLength" .   " . " ."The longest array length is  $longestLength";



// 13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12
echo"<br>";
$start = 11;
$end = 20;
$numbers = range($start, $end);
shuffle($numbers);
$randomNumbers = array_slice($numbers, 0, 10);
echo implode(" ", $randomNumbers);
echo"<br>";





//14

// 14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2
echo"<br>";
$array1 = array( 2, 0, 10, 12, 6) ;
$filteredArray = array_filter($array1, function($value) {
    return $value != 0;
});

// العثور على أصغر عدد في المصفوفة بعد إزالة الأصفار
 $lowest = min($filteredArray);
 echo $lowest;
 echo"<br>";

// 15.	Write a PHP program to sort an array of positive integers using the any Sort Algorithm.          
// Input array : Array ( [0] => 5 / [1] => 3 / [2] => 1 / [3] => 3 / [4] => 8 / [5] => 7 / [6] => 4 / [7] => 1/ [8] => 1 / [9] => 3 )
// Expected Result : Array ( [0] => 8 / [1] => 7 / [2] => 5 / [3] => 4 / [4] => 3 / [5] => 3 / [6] => 3 / [7] => 1 [8] => 1/ [9] => 1 )
echo"<br>";
  $array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
  usort($array, function($a, $b) {
    return $b - $a; // الترتيب من الأكبر إلى الأصغر
  });
  print_r($array);
echo"<br>";




// note 16.	Write a PHP function to floor decimal numbers with precision. Note: Accept three parameters number, precision, and $separator
// Sample Data : 
// 1.155, 2, "."
// 100.25781, 4, "."
// -2.9636, 3, "."
// Expected Output :
// 1.15
// 100.2578
// -2.964


// function floorDecimal($number, $precision, $separator) {
//     // استخدام round لتقريب العدد بناءً على الدقة المحددة
//     $roundedNumber = round($number, $precision);
    
//     // تحويل الرقم إلى سلسلة واستخدام الفاصل المحدد بين الجزء الصحيح والعشري
//     $formattedNumber = number_format($roundedNumber, $precision, $separator, '');
    
//     return $formattedNumber;
// }

// // اختبار الدالة مع البيانات المدخلة
// echo floorDecimal(1.155, 2, '.') . "<br>";      // النتيجة: 1.15
// echo floorDecimal(100.25781, 4, '.') . "<br>"; // النتيجة: 100.2578
// echo floorDecimal(-2.9636, 3, '.') . "<br>";






// 17.  Write a PHP script to merge two commas separated lists with unique values only.
// Sample input: list1 = "4, 5, 6, 7";
//   		list2 = "4, 5, 7, 8";
// Sample output: 4, 5, 6, 7, 8

$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

// تحويل السلاسل النصية إلى مصفوفات باستخدام explode
$array1 = explode(", ", $list1);
$array2 = explode(", ", $list2);

// دمج المصفوفات والتأكد من أن القيم فريدة باستخدام array_unique
$mergedArray = array_unique(array_merge($array1, $array2));

// تحويل المصفوفة المدمجة إلى سلسلة مفصولة بفواصل
$mergedList = implode(", ", $mergedArray);

// طباعة النتيجة
echo $mergedList;

// 18. Write a PHP function to remove the duplicate entry from an array.
// sample input = 4, 5, 6, 7, 4, 7, 8
// sample Output = 4, 5, 6, 7, 8


$array = array(4, 5, 6, 7, 4, 7, 8);

// استخدام دالة array_unique لإزالة القيم المكررة
$uniqueArray = array_unique($array);

// طباعة النتيجة
echo implode(", ", $uniqueArray);



// 19. Write a PHP Program to find if an array is a subset of another.
// sample input:
// array1 = 'a','1','2','3','4'
// array2 = 'a','3'
// 	sample output:
// array2 is a subset array from array1

$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

// التحقق مما إذا كانت array2 هي مجموعة فرعية من array1
if (empty(array_diff($array2, $array1))) {
    echo "array2 is a subset array from array1";
} else {
    echo "array2 is not a subset array from array1";
}



















?>
</body>
</html>