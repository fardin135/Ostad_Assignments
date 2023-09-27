<?php
$text = "The quick brown fox jumps over the lazy dog.";
function replaceWith($txt){
    $low= strtolower($txt);
    $replace= str_replace("brown", "red", $low);
    return $replace;
}
echo replaceWith($text);
?>
