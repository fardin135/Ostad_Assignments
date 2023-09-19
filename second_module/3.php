<?php
//==========3 start==========
function fibonacchi(){
    $ini=0;
    $old=1;
    $new=1;
    for ($i=1; $i <= 20; $i++) { 
        if ($ini>100) {
            break;
        }
        echo $ini." ".'<br>';
        $old=$new;
        $new= $ini + $old;
        $ini=$old;
    }
}
fibonacchi();
//==========3 end==========
?>