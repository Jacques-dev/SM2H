<?php
  require('../FonctionDoc/fonctiondoc.php');
  start("medecin.php");


if(isset($_GET['acte'])){
  $myfile = fopen("acte/newfile.txt", "w") or die("Unable to open file!");
  fwrite($myfile, $_GET['acte']);
  fclose($myfile);
}










?>
        <h1>Ajouter un acte médical</h1>
        <br>
        <div class="main" style="border-left: solid;border-right: solid;">
          <form action="./ajout.php" method="get">
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Description:</label>
              <div class="col-sm-9">
              <textarea class="form-control" rows="15" name="acte"></textarea>
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-dark  pull-right">Confirmer</button>
          </form>

        </div>
<?php
last();
?>
