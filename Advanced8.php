<!-- Number of visitors  -->
<?php
// تحديد مسار الملف الذي سيخزن عدد الزوار
$file = "Advancedtest";

// التحقق من وجود الملف، وإذا لم يكن موجودًا، يتم إنشاؤه
if (!file_exists($file)) {
    file_put_contents($file, "0");  
    // إذا لم يكن موجودًا، نبدأ من 0
}

// قراءة عدد الزوار الحالي من الملف
$counter = (int)file_get_contents($file);

// زيادة العداد بمقدار واحد
$counter++;

// حفظ العداد الجديد في الملف
file_put_contents($file, $counter);

// عرض عدد الزوار
echo "Number of visitors: " . $counter;
?>
