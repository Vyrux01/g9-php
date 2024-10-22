<?php

//ex 1
function eliminaVocale(string $text){
    $vocale=['a','e','i','o','u','A','E','I','O','U'];

    $textFaraVocale=str_replace($vocale,'',$text);

    return $textFaraVocale;
}

$text="Fac o ora pana la Bucuresti";
$textFaraVocale=eliminaVocale($text);

echo $textFaraVocale;
echo '<hr>';

//ex 2
function caractereNumar(string $text){
    $numar=[];

    for($i=0;$i<strlen($text);$i++){
        $caracter=$text[$i];

        if(isset($numar[$caracter])){
            $numar[$caracter]++;
        }else{
            $numar[$caracter]=1;
        }
    }
    return $numar;
}

$text="telecomanda";
$afisare=caractereNumar($text);

print_r($afisare);

echo '<hr>';

//ex 3

function cuvinteDimensiune(string $text, int $dimensiune){
    $cuvinte= explode(' ',$text);

    foreach($cuvinte as $cuvant){
        if(strlen($cuvant)=== $dimensiune){
            echo $cuvant . '<br/>';
        }
    }
}

$text="Astazi nu am mancat tot din farfurie";
$dimensiune=2;

cuvinteDimensiune($text, $dimensiune);