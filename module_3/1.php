<?php
//--------------1--------------------------------------
$text = "The quick brown fox jumps over the lazy dog.";
$low= strtolower($text);
$replace= str_replace("brown", "red", $low);
echo ($replace);
?>
<?php

?>
