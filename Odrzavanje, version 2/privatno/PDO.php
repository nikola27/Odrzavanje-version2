<?php include_once "conf.php" 
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "odjava.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "predlozak/head.php" ?>
  </head>
  <body>
      
    <?php include_once "predlozak/header-menu.php" ?>
    
    <?php include_once "predlozak/home.php" ?>
    
PDO 

<div class="grid-x">
  
  <?php
  $veza = new PDO("mysql:host=localhost;dbname=mojprimjer1","edunova","edunova");
  $izraz = $veza->prepare("select * from kvar");
  $izraz->execute();
  $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
  ?>
 
   <div class="cell large-12">
     <?php 
     ?>
     <table>
     <thead>
     <tr>
     <th>Šifra</th>
     <th>Naziv</th>
     <th>Opis</th>
     <th>Kategorija</th>
     <th>Datum</th>
     </tr>
     </thead>
     <tbody>
     <?php foreach($rezultati as $red):?>
       <tr>
       <td><?php echo $red->sifra; ?></td>
       <td><?php echo $red->naziv; ?></td>
       <td><?php echo $red->opis; ?></td>
       <td><?php echo $red->kategorija; ?></td>
       <td><?php echo $red->datum; ?></td>
       </tr>
     <?php endforeach;?>
     </tbody>
     </table>
   </div>
   </div>


    <?php include_once "predlozak/footer.php" ?>

    <?php include_once "predlozak/scripts.php" ?>
  </body>
</html>