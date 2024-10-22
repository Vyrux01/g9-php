<?php
echo "Hello \"Word!\"  \\ \$ \n \ttest";

echo '<br> salut de la \'mare\'';

echo '<br>';
$string= 'Hello from the future!';
echo strlen($string);
echo '<br>';
echo str_word_count($string);
echo '<br>';
echo strrev($string);
echo '<br>';
var_dump(strpos(haystack: $string, needle: 'then'));
echo '<br>';
echo str_replace('future','past',$string);
echo '<br>';
echo substr($string,6,4);
echo '<pre>';
print_r($string);
$array=str_split($string);
$array2=str_split($string,4);
print_r($array);
print_r($array2);
