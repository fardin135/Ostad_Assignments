<?php
//==========1 start==========
 function even($start,$end,$step){

     for ($i= $start; $i <= $end; $i++) { 
        if ($i%2==0) {
            if ($i==$end) {
                echo $i.'.';
            }else {
                echo $i.','.' ';
            }
        }
         }
     }
even(1,30,2);



  function even1($start, $end, $step) {
      $i= $start;
      while($i <= $end) {
        if ($i%2==0) {
            if ($i==$end) {
                echo $i.'.';
            }else {
                echo $i.','.' ';

            }
        }
        $i++;
         }
  }
  even1(1, 20, 2);



    function even2($start, $end, $step) {
    $i= $start;
      do {
        if ($i%2==0) {
            echo $i.', ';
        }
          $i++;
      } while ($i <= $end);
  }
  even2(1,20,2);
//==========1 end==========
?>