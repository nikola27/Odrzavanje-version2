<?php 
include_once "conf.php" ;
unset($_SESSION[$idAPP . "o"]);
header("location: index.php");
