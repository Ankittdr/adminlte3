<?php
function getProductCode(){
    $random=rand(11111, 99999);
    $code= "NDS".$random;

    return $code;


}