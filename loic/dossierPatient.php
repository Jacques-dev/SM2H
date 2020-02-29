<?php
  require('../FonctionDoc/fonctiondoc.php');
  start("medecin.php");
?>
        <h1>Dossier du patient: Nom Prénom</h1>
        <br>
        <div class="main">


          <div class="container h-100 py-2">
              <ul class="nav nav-tabs border-0 nav-justified" id="myTab" role="tablist">
                  <li class="nav-item nav-item-custom">
                      <a class="nav-link active border border-dark " data-toggle="tab" href="#p1" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                  </li>
                  <li class="nav-item nav-item-custom">
                      <a class="nav-link border border-dark "data-toggle="tab" href="#p2" role="tab" aria-controls="profile" aria-selected="false">Hospitalisation</a>
                  </li>
                  <li class="nav-item nav-item-custom">
                      <a class="nav-link border border-dark " data-toggle="tab" href="#p3" role="tab" aria-controls="messages" aria-selected="false">Consultation sans hospitalisation</a>
                  </li>
                  <li class="nav-item nav-item-custom">
                      <a class="nav-link border border-dark " data-toggle="tab" href="#p4" role="tab" aria-controls="settings" aria-selected="false">Ordonnance</a>
                  </li>
              </ul>

              <div class="tab-content h-75">
                  <div class="tab-pane h-100 p-3 active border border-dark" id="p1" role="tabpanel" aria-labelledby="home-tab">
                    <form>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Prénom</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" placeholder="Loïc" >
                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Nom</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control"  placeholder="FOURNIER" >
                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Adresse postale</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control"  placeholder="55 Rue du Faubourg Saint-Honoré, 75008 Paris" >
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
                    </form>


                  </div>
                  <div class="tab-pane h-100 p-3 border border-dark" id="p2" role="tabpanel" aria-labelledby="profile-tab">
                    <button type="button" class="btn btn-light btn-lg btn-block border border-dark">Ajouter une hospitalisation</button>
                    <button type="button" class="btn btn-light btn-lg btn-block border border-dark">Sélectionner une hospitalisation</button>

                  </div>
                  <div class="tab-pane h-100 p-3 border border-dark" id="p3" role="tabpanel" aria-labelledby="messages-tab">

                      <button type="button" class="btn btn-light btn-lg btn-block border border-dark">Rechercher un acte</button>
                      <button type="button" class="btn btn-light btn-lg btn-block border border-dark">Ajouter un acte</button>




                  </div>
                  <div class="tab-pane h-100 p-3 border border-dark" id="p4" role="tabpanel" aria-labelledby="settings-tab">

                    <button type="button" class="btn btn-light btn-lg btn-block border border-dark">Consulter une ordonnance</button>
                    <button type="button" class="btn btn-light btn-lg btn-block border border-dark">Ajouter une ordonnance</button>



                  </div>
              </div>

          </div>

        </div>
<?php
last();
?>
