<?php

$cars= ['BMW','Volvo','Audi'];
$cars2[]='Audi';


echo $cars[1];

$names=[
    'nume1'=>'Marian', 
    'nume2'=>'Lorena' ,
    'nume3'=> ' Irina' ,
    'nume4'=> 'Andrei' , 
    'nume5'=>'Ionut',
];

echo '<br>';
echo $names['nume4'];

$names2['nume1']='Marian';//alta scriere

$garage=[
    ['brand'=>'BMW','gas_type'=>'diesel'],
    ['brand'=>'Audi','gas_type'=>'GPL'],
];
echo '<br>';
echo $garage[1]['brand'];


foreach($garage as $car){
    echo '<br>' . $car['brand'];
}

echo '<hr>';
$animals=['dog','cat','mouse','elephant','bird'];
asort($animals);
print_r($animals);
echo '<br>';
rsort($animals);
print_r($animals);

echo '<hr>';

$colors=[
'color1'=>'red',
'color2'=>'green',
'color3'=>'blue',
'color4'=>'yellow',
'color5'=>'black',
];
echo '<br>';
asort($colors);
print_r($colors);
ksort($colors);
print_r($colors);

echo '<hr>';

$cities=[
    'city2'=>'Bucuresti',
    'city5'=>'Cluj',
    'city1'=>'Timisoara',
    'city7'=>'Iasi',
];
arsort($cities);
print_r($cities);
echo '<br>';
krsort($cities);
print_r($cities);


echo '<br>';
if(in_array('Timisoara', $cities)){
    echo 'Timisoara is found in the array';
}else{
    echo 'Timisoara is not found in the array';
}

echo '<hr>';
$citiesMultiple=array_chunk($cities,2,true);
echo '<pre>';
