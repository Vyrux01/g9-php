<?php

declare(strict_types=1);

function showmessage()
{
    echo 'message';
}

function returnmessage()
{
    return 'message returned';
}

showmessage();

 echo '<br/>';

 echo returnmessage();

 $message2 = returnmessage();
 var_dump($message2);

 function showname($name= 'Madalin') {

    echo 'My name is : ' . $name;
 }

 echo '<br/>';
 showname('Marian');
 echo '<br/>';
 showname();

 function addnumbers(int $a, int $b)
 {
    echo $a+$b;
 }

 echo '<br/>';
 addnumbers(1,1);