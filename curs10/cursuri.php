<?php

require_once 'Curs.php';
echo Curs::$curs;
echo '<br>';
$curs1 = new Curs();
echo $curs1->getName();
echo '<br>';
echo Curs::getCurs();