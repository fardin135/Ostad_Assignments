<?php
//==========4 start==========
function fibonacchi_num($num){
    $ini=0;
    $old=1;
    $new=1;
    for ($i=1; $i <= $num; $i++) { 
        echo $ini." ".'<br>';
        $old=$new;
        $new= $ini + $old;
        $ini=$old;
    }
}
fibonacchi_num(15);
//==========4 end==========
?>