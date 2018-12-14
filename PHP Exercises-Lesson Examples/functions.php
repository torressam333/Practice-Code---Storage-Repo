<?php

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function checkAge($age){
    if($age >= 21){
        echo 'You may enter into the club';
    }else
    {
        echo 'Sorry pip-squeek, you need to be 21 or older to partay';
    }

}