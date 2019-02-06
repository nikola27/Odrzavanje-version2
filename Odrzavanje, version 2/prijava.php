<?php include_once "conf.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>


    <?php include_once "predlozak/head.php" ?>

    <style>

    #header {
      position: inherit;
      background: #343b40;
}

    .form {
            position: center;
            border: 1px solid #cacaca;
            padding: 1rem;
            border-radius: 0;

          }
   </style>
</head>
        
        
<body>
          <div class="grid-container ">

        <div class="grid-x grid-padding-x">

          <div class="large-4 cell text-center " style = "margin: auto" >

        <form class="callout text-center" action="autoriziraj.php" method="post">
          <h1>Prijava</h1>

          <div class="floated-label-wrapper">
            <label for="korisnik">Korisnik</label>
            <input autocomplete="off" type="text" id="korisnik" name="korisnik" placeholder="nsaric">
          </div>

          <div class="floated-label-wrapper">
            <label for="lozinka">Lozinka</label>
            <input autocomplete="off" type="password" id="lozinka" name="lozinka" placeholder="n">
          </div>

          <input class="button expanded" type="submit" value="Potvrdi">
        </form>

      </div>

    </div>


<br><br><br><br><br><br><br><p style="text-indent: 5em;"></p>



    
    <?php include_once "predlozak/footer.php" ?>

    <?php include_once "predlozak/scripts.php" ?>

    </div>
</body>
</html>