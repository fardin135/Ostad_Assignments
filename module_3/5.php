<?php
/*
//-------------5 (first type)---------
function generatePassword(int $length)
{
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$uppercase = strtoupper($lowercase);
$numbers = '0123456789';
$specialChars = '!@#$%^&*()_+';
$all = $lowercase . $uppercase . $numbers . $specialChars;
$str_length = strlen($all);
$random = '';
for ($i=0; $i < $length; $i++) { 
    $random = $random . $all[mt_rand(0,$str_length - 1)];  
}
return $random;
}
echo generatePassword(12);
*/


//-------------5 (second type)--------
function generatePassword(int $length)
{
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$uppercase = strtoupper($lowercase);
$numbers = '0123456789';
$specialChars = '!@#$%^&*()_+';
$all = $lowercase . $uppercase . $numbers . $specialChars;
$str_length = strlen($all);
$random = '';

for ($i=0; $i < $length/3; $i++) { 
    $random = $random . $lowercase[mt_rand(0, strlen($lowercase) - 1)];  
    $random = $random . $uppercase[mt_rand(0, strlen($uppercase) - 1)]; 
    $random = $random . $numbers[mt_rand(0, strlen($numbers) - 1)]; 
    $random = $random . $specialChars[mt_rand(0, strlen($specialChars) - 1)]; 
}
return $random;
}
echo generatePassword(12);

?>