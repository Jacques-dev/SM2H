<?php
  session_start();

  function start() {
    ?>
      <!doctype html>
      <html lang="fr">

        <head>
          <meta charset="utf-8">
          <title>SM2H</title>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <link rel="stylesheet" href="style/style.css">
          <link rel="stylesheet" href="style/pages/fonctiondoc.css">
          <link rel="stylesheet" href="style/pages/medecin.css">
          <link rel="stylesheet" href="style/pages/popup.css">

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
            <a href="/" class="navbar-brand abs">Nom</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-stretch" id="navbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="//codeply.com"><img class="navbarIcon" src="./images/logo.png" alt="logo"></a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="//codeply.com"><img class="navbarIcon" src="./images/calendar.png" alt="logo"></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle dropdown-toggle-custom" href="#" id="navbardrop" data-toggle="dropdown">
                    <img class="navbarIcon" src="./images/profile.png" alt="logo">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Gérer mon compte</a>
                    <a class="dropdown-item" href="#">Déconnexion</a>
                  </div>
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
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <form method="post" action="<?php echo ($page); ?>" >
            <input type="submit" name="deconnexion" value="deconnexion" class="spot">
          </form>
        </div>
      </svg>
    </div>
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
    $test =
    header("Location:" . $_SESSION["test"]);
  }

  if (isset($_POST["decoON"])) {
    header("Location: index.php");
  }
?>
