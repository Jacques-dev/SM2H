<?php
  require('../FonctionDoc/fonctiondoc.php');
  start("medecin.php");


if(isset($_GET['file'])){
  if (file_exists('./acte/'.$_GET['file'].'.txt')) {
  $file = file_get_contents('./acte/'.$_GET['file'].'.txt', true);
  }else{
    $file = "Le fichier n'existe pas";
  }
}
else{
  $file="Aucun fichier sélectionner";
}










?>
        <h1>Consulter un acte médical</h1>
        <br>
        <div class="main" style="border-left: solid;border-right: solid;">
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Description:</label>
              <div class="col-sm-9">
              <textarea class="form-control" rows="15" name="acte" disabled><?php echo $file; ?></textarea>
              </div>
            </div>
            <br>

        </div>
<?php
last();
?>
