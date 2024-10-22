<?php


session_start();

if(isset($_SESSION['counter'])){
    $_SESSION['counter']++;
}else{
    $_SESSION['counter'] = 1;
}

echo 'You visited the website ' . $_SESSION['counter'] . ' times';