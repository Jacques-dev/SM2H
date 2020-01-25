<?php
function start() {
  ?>
  <!doctype html>
  <html lang="fr">

  <head>
      <meta charset="utf-8">
      <title>SM2H</title>
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>
      <!--  NavBar -->
      <div class="navBar">
          <div onclick="location.href='./index.php';" class="navBarItemLeft">
              <img class="navBarLogo" src="./images/logo.png" alt="logo">
          </div>

          <div onclick="window.open('./index.php');" class="navBarItemRight">
              <img class="navBarLogo" src="./images/profile.png" alt="logo">
          </div>
          <div onclick="window.open('https://calendar.google.com/');" class="navBarItemRight">
              <img class="navBarLogo" src="./images/calendar.png" alt="logo">
          </div>
          <div class="navBarTitle">
              Nom de la personne connecté
          </div>
      </div>

      <!-- content  -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
  <?php
}
?>
            
<?php
function last() {
  ?>
          </div>
        </div>
      </div>
    </body>

    </html>
<?php
}
?>
