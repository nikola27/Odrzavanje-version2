<?php


session_start();
include_once "functions.php";
$idAPP="OdrzavanjeVer2";
$nazivAPP="Održavanje";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Primjer/";
    $veza = new PDO("mysql:host=localhost;dbname=mojprimjer1","edunova","edunova");
    $veza->exec("set names utf8;");
    break;

    case "edunovanastava.byethost33.com":
    $putanjaAPP="/PP17/";
    $bojaIzbornika="";
    break;
}
