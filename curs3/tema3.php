<?php

//EX 1

declare(strict_types=1);

function afiseazaDivCu3(int $a , int $b){
      if($a>$b){
        $cont=$a;
        $a=$b;
        $b=$cont;
      }
    
      echo "Numerele divizibile cu 3 intre $a si $b sunt:<br/>";

      for($i=$a;$i<=$b;$i++)
      {
        if($i%3==0){
            echo "$i<br/>";
        }
      }
}

afiseazaDivCu3(20,9);

echo '<hr>';
//EX 2

function numarePare(array $vector){
  $countPare=0;
   foreach ($vector as $numar){
    if($numar %2==0){
      $countPare++;
    }
   }
   echo "Vectorul contine $countPare numere pare.<br/>";
}

$vector = [1,2,3,4,5,6,7,8,9,10];
numarePare($vector);

echo '<hr>';

//EX 3

function verificarePalindrom(int $numar){
    



  if(){
    echo "$numar este palindrom.<br/>";
   }else {
    echo "$numar nu este palindrom.<br/>";
   }
}

verificarePalindrom(52425)