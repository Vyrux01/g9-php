<?php


function exportToCSV(array $persons,string $filename, string $fileMode)
{
    $file = fopen($filename, $fileMode);

    fwrite($file,implode(",",array_keys($persons[0])));
    fwrite($file,"\n");
    foreach ($persons as $person) {
        fwrite($file,implode(",",$person). "\n");
    }
    fclose($file);
}

