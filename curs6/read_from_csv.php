<?php

$file= fopen('persons.csv', 'r');

$persons=[];
$columns=fgetcsv($file);
while ($data = fgetcsv($file)) {
    foreach ($data as $key => $value) {
        $person[$columns[$key]]=$value;
        unset($person[$key]);
    }
    $persons[]=$person;
}



echo '<pre>';
print_r($columns);
print_r($persons);