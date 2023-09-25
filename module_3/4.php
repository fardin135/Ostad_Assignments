<?php
//-------------4--
$studentGrades = [
    $student_1= ['Math' => 10, 'English' => 20, 'Science' => 30],
    $student_2= ['Math' => 40, 'English' => 50, 'Science' => 60],
    $student_3= ['Math' => 70, 'English' => 80, 'Science' => 90]
];
function avg($grades) {
    foreach ($grades as $index => $value) {
        $average = array_sum($value) / count($value);
        echo "Average Grade of Student " . ($index+1) ." is: " . $average . '<br>';
    }
}
avg($studentGrades);
?>