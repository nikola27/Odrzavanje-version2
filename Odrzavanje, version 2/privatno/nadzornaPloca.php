<?php include_once "../conf.php" ;

if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "odjava.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../predlozak/head.php" ?>
  </head>
  <body>
      
    <?php include_once "../predlozak/header-menu.php" ?>
    
    
    
    NADZORNA PLOĆA


    <?php include_once "../predlozak/footer.php" ?>

    <?php include_once "../predlozak/scripts.php" ?>
  </body>
</html>