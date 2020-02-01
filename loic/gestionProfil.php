<?php require('start.php'); ?>
        <h1>Gérer mon profil</h1>
        <br>
        <div class="main" style="border-left: solid;border-right: solid;">



          <form>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Prénom</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="Loïc" readonly data-toggle="popover" data-content="Veuillez contacter un administrateur réseau">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Nom</label>
              <div class="col-sm-5">
                <input type="text" class="form-control"  placeholder="FOURNIER" readonly data-toggle="popover" data-content="Veuillez contacter un administrateur réseau">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Adresse postale</label>
              <div class="col-sm-5">
                <input type="text" class="form-control"  placeholder="55 Rue du Faubourg Saint-Honoré, 75008 Paris" readonly data-toggle="popover" data-content="Veuillez contacter un administrateur réseau">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Adresse mail</label>
              <div class="col-sm-5">
                <input type="email" class="form-control" placeholder="lfourn06@etud.u-pem.fr">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Numéro de téléphone</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="0660393578">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Image</label>
              <div class="col-sm-5">
                <img src="./images/Loic.png" alt="Utilisateur" class="rounded img-fluid userPicture">
                <input type="file" id="avatar" name="avatar" accept="image/png">
              </div>
            </div>
            <button type="submit" class="btn btn-dark  pull-right">Confirmer</button>
          </form>

        </div>
<?php require('end.php'); ?>
