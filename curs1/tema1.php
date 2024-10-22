<?php
 
 declare(strict_types=1);

 function shownumber($number) {

    echo 'Ati introdus valoarea: ' . $number ;
 }

 echo '<br/>';
 shownumber('7');

 function addadunare(int $a , float $b)
 {
   echo $a+$b;
 }
 echo '<br/>';
 addadunare(20 , 789.123);

 function addnumber(int $a, float $b=8.89 , int $c=9)
 {
   echo $a+$b+$c;
 }

 echo '<br/>';
 addnumber(3);

 function concat(int $a , int $b)
 {
  return $a.$b;
 }

 echo '<br/>';
 concat(5,7);


