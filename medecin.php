<?php 
  require('fonctiondoc.php');
  start();
?>


  
  <div class="content">
    <div class="container">
      <div class="row">
        <a href="dmp.php" class="col-sm-6 tabmedecin">Consulter un DMP</a>
        <a href="acte.php" class="col-sm-6 tabmedecin">Consulter un ACTE</a>
      </div>
    </div>
    
    <?php deco("medecin.php"); ?>
  </div>


<?php
last();
?>
