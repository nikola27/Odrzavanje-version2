
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- ovo je za logo al kao sv
          <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>  

        -->
        <!-- za tekst umjesto loga -->
        <h1><a href="#hero">Održavanje</a></h1>
      </div>
      
      <nav id="nav-menu-container">
        <div class="nav-menu">
   
               <?php
                if(isset($_SESSION[$idAPP."o"])): ?>
                 <li class="menu-has-children" data-dropdown-menu><a href="">Izbornik</a>
                 <ul>
               <?php 
                stavkaIzbornika($putanjaAPP,"privatno/nadzornaPloca.php","Nadzorna ploča");
                stavkaIzbornika($putanjaAPP,"privatno/kvar/index.php","Kvar");
                 else:?>
    
                <li class="menu-active"><a href="#hero">Početna</a></li>
                <li><a href="#about">O nama</a></li>
                <li><a href="#contact">Kontakt</a></li>
                <?php endif?>
                </ul>
          
                      <?php if(isset( $_SESSION[$idAPP."o"])): ?>
                      <li><a href="<?php echo $putanjaAPP; ?>odjava.php">Odjava</a></li>
                      <?php else:?>
                      <li><a href="<?php echo $putanjaAPP; ?>prijava.php">Prijava</a></li>
                      <?php endif?>
                    
        </div>
      </nav> <!-- #nav-menu-container -->
    </div>
  </header>
  
  