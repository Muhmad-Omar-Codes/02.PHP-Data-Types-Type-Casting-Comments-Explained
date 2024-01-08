<?php

/*
أمثلة عملية على المفاهيم المذكورة في الوثيقة 02
*/

// 6.1.1. السلاسل النصية (string):
$name = "SMA GROUP";
echo $name; // = SMA GROUP


// 6.1.2. الأرقام الصحيحة (int => Integer):
$number = 10;
echo $number; // = 10


// 6.1.3. الأرقام العشرية (float, double):
$float_num = 33.2;
echo $float_num; // = 33.2

$double_num = 5.22;
echo $double_num; // = 5.22


// 6.1.4. قيمة منطقية (bool => Boolean):
$true_value = true;
echo $true_value; // = 1

$false_value = false;
echo $false_value; // =  0


// 6.1.5. المصفوفات (array):
$array = array(1, 2, 3, "SMA");
print_r($array); // = قيم المصفوفة


# 6.2. تحويل نوع البيانات - Type Casting:

# 6.2.1. التحويل الضمني (Implicit Type Casting):
$number = 10; // integer
$float_num = $number + 5.5; // تحويل ضمني إلى نوع float
echo $float_num; // = 15.5


# 6.2.2. التحويل الصريح (Explicit Type Casting):
$value = 10; // integer
$string_value = (string)$value; // تحويل صريح إلى نوع string
echo $string_value; // = 10 (كنص)


# 6.3. التعليقات - Comments:

// 6.3.1. تعليق على سطر واحد (Single Line):
// هذا تعليق واحد يوضح الغرض من هذا السطر
$variable = 10; // تعليق آخر يشرح القيمة المخزنة في المتغير


// 6.3.2. تعليقات متعددة الأسطر (Multiples Line):
/*
   هذا تعليق متعدد الأسطر
   يمكن أن يحتوي على العديد من الجمل
   لشرح كود متعدد السطور
*/
$variable = 10;
