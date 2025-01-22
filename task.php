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
    $string="Hello world";
    echo strtoupper( $string);

    //2
    $string="WELCOME";
    echo "<br>";
    echo strtolower( $string);
    //3
    $string="php";
    echo "<br>";
    echo ucfirst( $string);
    //4
    $string = "hello world, welcome to php";
    echo"<br>";
    echo ucwords($string);
    // 2 a
    $numericString = "085119";
    echo"<br>";
    echo implode (":",str_split($numericString,2));
    //3
    $sentances="I am a full stack developer at orange coding academy";
    $foundedWord="Orange";
    echo "<br>";
    if(stripos( $sentances,$foundedWord )!== false)
    // التحقق مما إذا كانت الكلمة موجودة في الجملة باستخدام stripos

 {
    echo "Word Found!";

 }

 else {
    echo "Word Not Found!";
}



//4


$url = "www.orange.com/index.php";
echo"<br>";
echo basename($url);
// basename لاستخراج اسم الملف
    // الدالة بإرجاع الجزء الأخير من المسار الذي يمثل اسم الملف فقط،
//5
$email="info@orange.com";
echo"<br>";
//explode لتقسيم البريد الإلكتروني
echo explode("@", $email)[0];
//6
// $email="info@orange.com";
// echo "<br>";
// echo explode("orange",$email)[2];
$email="info@orange.com";
echo "<br>";
echo substr($email,-3);
//7
$password="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
echo"<br>";
echo substr(str_shuffle($password),6, 18);
//str_shuffle(): تقوم هذه الدالة بخلط 
// الأحرف في السلسلة بحيث يتم ترتيبهم بشكل عشوائي.
// substr(): تُستخدم هذه الدالة لاقتطاع الأحرف الأولى من السلسلة المخلطة بحيث نأخذ فقط عدد الأحرف 

//8
$sentances="That new trainee is so genius.";
$word="Our";
echo"<br>";
echo preg_replace('/^\S+/',$word,$sentances);
//9
function findFirstDifference($str1, $str2) {
    $length = min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference between two strings at position " . ($i + 1) . ": \"$str1[$i]\" vs \"$str2[$i]\"";
        }
    }
    if (strlen($str1) !== strlen($str2)) {
        return "Strings have different lengths, and no difference was found within the length of the shorter string.";
    }

    // إذا كانت السلاسل متطابقة
    return "The strings are identical.";
}

$string1 = 'dragonball';
$string2 = 'dragonboll';

echo"<br>";
echo findFirstDifference($string1, $string2);

//10


$string="Twinkle, twinkle, little star.";
$array= explode(", ", $string);
echo"<br>";
var_dump($array);

//11

$input = 'a';  //you can change the letter to z
$currentChar = ord($input);
if ($currentChar == 122) {
    $nextChar = 'a';
} else {
    $nextChar = chr($currentChar + 1);
}
echo"<br>";
echo "The next letter after '$input' is '$nextChar'.";

//12
$originalString = 'The brown fox';
$insertString = 'quick';
$position = 4;
$newString = substr_replace($originalString, ' ' . $insertString . ' ', $position, 0);
//0 يعني من وين بدي ابلش
echo"<br>";
echo $newString;
//18
$originalString = 'The quick brown fox';
$words = explode(' ', $originalString);

// الحصول على أول كلمة من المصفوفة
$firstWord = $words[0];
echo $firstWord;

//13
// $originalString = '0000657022.24';
// // إزالة الأصفار من بداية النص باستخدام ltrim
// $cleanedString = ltrim($originalString, '0');
// echo"<br>";
// echo $cleanedString;

$num= '0000657022.24';
$trimmed = str_replace("0", " ", $num);
echo $trimmed;

//14

// Original string
$original_string = 'The quick brown fox jumps over the lazy dog';
$modified_string = str_replace('fox', '', $original_string);
echo"<br>";
echo $modified_string;

//15
$original_string = 'The quick brown fox jumps over the lazy dog---';

// Remove trailing dashes
$modified_string = rtrim($original_string, '-');
echo"<br>";
echo $modified_string;

//16
// Original string with special characters
$original_string = '\"\1+2/3*2:2-3/4*3';

// Remove special characters, keeping only numbers and spaces
$modified_string = preg_replace('/[^0-9 ]/', '', $original_string);
echo"<br>";
echo $modified_string; 
//$char ='"\1+2/32:2-3/43';
// حل آخر$removecharr =preg_replace('/[^0-9]/', '',$char); 

// echo $removecharr;]

//17
$original_string = 'The quick brown fox jumps over the lazy dog';
$words = explode(' ', $original_string);
$first_five_words = array_slice($words, 0, 5);
$modified_string = implode(' ', $first_five_words);
echo"<br>";
echo $modified_string;
//18
$original_string = '2,543.12';
$modified_string = str_replace(',', '', $original_string);
echo"<br>";
echo $modified_string;

//19
for ($i = 97; $i <= 122; $i++) {
    echo chr($i) . ' ';
}


?>

</body>
</html>