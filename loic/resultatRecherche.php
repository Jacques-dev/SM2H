<?php require('start.php'); ?>
<br>
<div class="main">
  <div class="input-group md-form form-sm form-2 pl-0">
    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Nom / Prénom du patient" aria-label="Search">
    <div class="input-group-append">
      <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fa fa-search text-grey"
          aria-hidden="true"></i></span>
    </div>
  </div>
        <br><br><br>

          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>Résultats de recherches</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Patient 1</td>
                  <td onclick="location.href='#'" class="text-center"><i class="fa fa-arrow-right"></i></td>
                </tr>
                <tr>
                  <td>Patient 2</td>
                  <td onclick="location.href='#'" class="text-center"><i class="fa fa-arrow-right"></i></td>
                </tr>
                <tr>
                  <td>Patient 3</td>
                  <td onclick="location.href='#'" class="text-center"><i class="fa fa-arrow-right"></i></td>
                </tr>
                <tr>
                  <td>Patient 4</td>
                  <td onclick="location.href='#'" class="text-center"><i class="fa fa-arrow-right"></i></td>
                </tr>
                <tr>
                  <td>Patient 5</td>
                  <td onclick="location.href='#'" class="text-center"><i class="fa fa-arrow-right"></i></td>
                </tr>
              </tbody>
            </table>
            </div>

        </div>
<?php require('end.php'); ?>
