<?php
  session_start();

  function start($page) {
    ?>
      <!doctype html>
      <html lang="fr">

        <head>
          <meta charset="utf-8">
          <title>SM2H</title>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <link rel="stylesheet" href="../style.css">
          <link rel="stylesheet" href="../Connexion/style.css">
          <link rel="stylesheet" href="../DataBase/style.css">
          <link rel="stylesheet" href="..//style.css">
          <link rel="stylesheet" href="../DMP/style.css">
          <link rel="stylesheet" href="../Hospitalisation/style.css">
          <link rel="stylesheet" href="..//style.css">
          <link rel="stylesheet" href="..//style.css">
          <link rel="stylesheet" href="../Medecin/style.css">


          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <script>
            $(document).ready(function(){
              $('[data-toggle="popover"]').popover();
            });
          </script>
        </head>

        <body>
          <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
              <a class="navbar-brand abs">Nom</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse collapse justify-content-stretch" id="navbar">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="//codeply.com"><img class="navbarIcon" src="../images/logo.png" alt="logo"></a>
                      </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="https://calendar.google.com/" target="_blank"><img class="navbarIcon" src="../images/calendar.png" alt="Calendar"></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><img class="navbarIcon" src="../images/profile.png" alt="Profil"></a>
                      </li>
                      <li class="nav-item">
                          <?php deco($page); ?>
                      </li>
                  </ul>
              </div>
          </nav>

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

<?php
  function deco($page) {
    ?>
    <form method="post" action="<?php echo ($page); ?>" >
      <button type="submit" name="deconnexion" id="decoimg">
        <img src="../images/deco.png" class="navbarIcon">
      </button>
    </form>
    <?php popup($page);
    $_SESSION["test"] = $page;
  }
?>

<?php
  function popup($page) {
    if (isset($_POST["deconnexion"])) {
      ?>

      <div class="popup">
        <span class="popuptext" id="myPopup">
          Vous êtes sûre de vouloir vous déconnecter ?

          <form method="post" action="fonctiondoc.php">
            <input type="submit" name="decoON" value="Oui">
          </form>
          <form method="post" action="fonctiondoc.php">
            <input type="submit" name="decoOFF" value="Non">
          </form>

        </span>
      </div>

      <script>
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      </script>
      <?php
    }
  }
?>

<?php
  if (isset($_POST["decoOFF"])) {
    header("Location:" . $_SESSION["test"]);
  }

  if (isset($_POST["decoON"])) {
    header("Location: index.php");
  }
?>
