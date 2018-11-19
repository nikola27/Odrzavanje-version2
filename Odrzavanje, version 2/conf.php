<?php

$nazivAPP="Edunova V1";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Primjer/";
    break;

    case "edunovanastava.byethost33.com":
    $putanjaAPP="/PP17/";
    $bojaIzbornika="";
    break;
}
