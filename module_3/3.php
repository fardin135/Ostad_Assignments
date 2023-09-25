<?php
//-------------3--------------
$grades =[85, 92, 78, 88, 95];
function sorted($n){
     rsort($n);
     return $n;
}
$sorted_grades = sorted($grades);
print_r($sorted_grades);
?>