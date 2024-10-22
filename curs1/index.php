<?php

echo 'Hello World'; // show hello world

// comment inline 

#comment inline


/*
multi line 
comment 
*/

/**
 * doc block comment 
 */

 echo '<br/>';

 $a =5.2;
 echo $a;
 echo '<br/>';
 var_dump($a);


 $nume='Marian $a';
 $prenume="Trifu $a";
 echo '<br/>';
 var_dump($nume);
 var_dump($prenume);

 $myName= ''; //empty string

 $bool= TRUE;

 echo '<br/>';
 var_dump($bool);

 $array= array(5, 'Marian',TRUE);
 $array2= ['alex', false, 3.4 , $a, $array] ;

echo '<br/>';
var_dump($array,$array2); // accepts multipe variables

class myobject {

}

$myobject1= new myobject();
$myobject2= new myobject();

echo '<br/>';
var_dump($myobject1, $myobject2 );

$nullable= 5;
echo '<br/>';
var_dump($nullable);

if(isset($nullable)){
    echo 'variabila is not  null';
}
else{
    echo 'varaiabila is  null';
}

define('GREETINGS', 'hELLO FROM my first php lesson!');
echo '<br/>';
echo GREETINGS;



