<?php
//-------------2-------
$numbers1= range(1,10);
function not_even($n){
    return ($n%2==1);
}
$odd= array_filter($numbers1,'not_even');
print_r ($odd);
?>