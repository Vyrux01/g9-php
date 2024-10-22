<?php

//EX 1
declare(strict_types=1);
function elementeComune(array $vector1, array $vector2){
    $vectorComun= array_intersect($vector1,$vector2);

    return $vectorComun;
}

$vector1=[1,2,3,4,5];
$vector2=[3,4,5,6,7];

$rezultat=elementeComune($vector1,$vector2);

echo "Elementele comune sunt:" .implode(",", $rezultat). '<br/>';

echo "<hr>";
//ex 2

function caracterCount(array $vector){
    $count1=0;
    $count2=0;
    $count3=0;
    $count4=0;
    $count5Plus=0;

    foreach ($vector as $element){
        $lenght=strlen($element);
        
        if($lenght==1){
        $count1++;
        }elseif ($lenght==2){
            $count2++;
        }elseif($lenght==3){
            $count3++;
        }elseif($lenght==4){
            $count4++;
        }else{
            $count5Plus++;
        }
    }

       echo "Elemente cu 1 caracter: $count1<br/>";
       echo "Elemente cu 2 caractere: $count2<br/>";
       echo "Elemente cu 3 caractere: $count3<br/>";
       echo "Elemente cu 4 caractere: $count4<br/>";
       echo "Elemente cu 5 sau mai multe caractere: $count5Plus<br/>";
}

$vector=["a", "ana", "elena","ab"];
caracterCount($vector);
echo "<hr>";

//ex 3



//ex 4

function vectorUnicOrdonat(array $vectorDeVectori){
    $vectorCombinat=[];
    foreach($vectorDeVectori as $vector){
        $vectorCombinat= array_merge($vectorCombinat, $vector);
    }
    $vectorUnic=array_unique($vectorCombinat);

    rsort($vectorUnic);

    return $vectorUnic;
}

$vectorDeVectori=[
       [1,2,3],
       [4,5,6],
       [7,8,9,10]
];

$rezultat=vectorUnicOrdonat($vectorDeVectori);

print_r($rezultat);

echo "<hr>";

//ex 5

function adaugaInVectorAsociativ(array $vectorAsociativ, $cheie, $valoare): array {
    
    $vectorAsociativ[$cheie] = $valoare;
    
    
    return $vectorAsociativ;
}


$vectorAsociativ = [
    "nume" => "Maria",
    "varsta" => 25,
    "oras" => "Bucuresti"
];

$cheie = "ocupatie";
$valoare = "Inginer";


$vectorActualizat = adaugaInVectorAsociativ($vectorAsociativ, $cheie, $valoare);


print_r($vectorActualizat);

echo "<hr>";


//ex 6


function initializeazaVector(): array {
    $vector = [];

   
    for ($i = 0; $i < 10; $i++) {
        $vector[$i] = [
            "nume" => null,
            "oras" => null,
            "telefon" => null
        ];
    }

    return $vector;
}


function populeazaVector(array &$vector, int $index, string $nume, string $oras, string $telefon): void {
   
    if (isset($vector[$index])) {
   
        $vector[$index]["nume"] = $nume;
        $vector[$index]["oras"] = $oras;
        $vector[$index]["telefon"] = $telefon;
    } else {
        echo "Indexul $index nu există în vector.\n";
    }
}




$vector = initializeazaVector();


populeazaVector($vector, 3, "Ion Popescu", "București", "0722334455");


print_r($vector);

echo "<hr>";