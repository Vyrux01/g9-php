<?php

if(3>2){
    echo 'true';
}
echo '<br>';

$a=null;
if(isset($a)){
    echo '$a is null';
}else {
    echo '$a is not null';
}

echo '<br>';

if($a<5){
    echo '$a is lower than 5';
}elseif($a==5){
    echo '$a is five';
}else {
    echo '$a is bigger than 5';
}

echo '<br>';
$b=3;
switch($b)
{case 1;
    echo '$b is one';
    break;
 case 2;
    echo '$b is two';
    break;
    case 3;
    echo '$b is three';
    break;
  default:
  echo '$b is not through our cases';
  break;    
}

echo '<br>';
switch($b){
    case $b>3;
    echo 'testing...';
    break;
    default:
    echo 'default';
    break;
}

echo '<hr>';

$z=5;
while($z<=10){
    echo $z .'<br>';
    $z++;
}

echo '<hr>';
$y=0;
do{
    echo $y . '<br>';
    $y++;
}while($y<=5);
echo '<hr>';
for($i=0;$i<=5;$i++){
    echo $i . '<br>';
}

echo '<hr>';

$colors=['red', 'black', 'blue'];
foreach($colors as $color){
   echo $color .'<br>';
}

foreach($colors as $key => $color){
    echo 'key:' . $key . ' and color is :' . $color . '<br>';
}

echo '<hr>';

for($i=0;$i<=5;$i++)
{
    if($i==3){
        break;
    }
    echo '$i is:' . $i . '<br>';;
}

echo '<hr>';

for($i=0;$i<=5;$i++)
{
    if($i==3){
        continue;
    }
    echo '$i is:' . $i . '<br>';;
}

