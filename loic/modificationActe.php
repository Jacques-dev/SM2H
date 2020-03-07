<?php
  require('../FonctionDoc/fonctiondoc.php');
  start("medecin.php");


if(isset($_GET['acte'])){
  $myfile = fopen("acte/newfile.txt", "w") or die("Unable to open file!");
  fwrite($myfile, $_GET['acte']);
  fclose($myfile);
}
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
        <h1>Modifier un acte médical</h1>
        <br>
        <div class="main" style="border-left: solid;border-right: solid;">
          <form action="./modificationActe.php" method="get">
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Description:</label>
              <div class="col-sm-9">
              <textarea class="form-control" rows="15" name="acte"><?php echo $file; ?></textarea>
              </div>
            </div>
            <br>
            <?php  if(isset($_GET['file'])){?>
            <input type="hidden" name="file" value="<?php echo $_GET['file']; ?>"><?php } ?>
            <button type="submit" class="btn btn-dark  pull-right">Sauvegarder</button>

          </form>

        </div>
<?php
last();
?>
