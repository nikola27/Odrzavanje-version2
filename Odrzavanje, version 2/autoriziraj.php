<?php
if(!isset($_POST["korisnik"])){
exit;
}

include_once "conf.php";

    if($_POST["korisnik"]===""){
        header("location: prijava.php?poruka=2");
        exit;
    }

    if(($_POST["korisnik"]==="nsaric" && $_POST["lozinka"]==="n")
    ||
    ($_POST["korisnik"]==="edunova" && $_POST["lozinka"]==="e")
    ){
        //pusti dalje
        $_SESSION[$idAPP."o"]= $_POST["korisnik"];
        header("location: index.php");
    }else{
        header("location: prijava.php?poruka=1");
    }
