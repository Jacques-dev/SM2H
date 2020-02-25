<?php require "start.php" ?>

    <h1>Ajouter une unité hospitalière</h1>
    <form action = "verif-form.php" method = "get">
        Nom<input type="text" name="Nom" />
        Description<input type="text" name="Description" />
        <input type = "submit" name = "s" value = "Rechercher">
    </form>

<?php require "end.php" ?>