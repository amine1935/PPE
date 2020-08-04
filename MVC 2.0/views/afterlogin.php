<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GSB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
  </head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">GSB</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?action=accueil">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?action=fiche">Mes fiches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?action=addfiche">Ajouter une fiche</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?action=editfiche">Valider une fiche</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="navbar-item">
          <a class="nav-link" href="?action=logout">Log out</a>
        </li>
    </div>
  </nav>

<?php
 /* foreach ($userinfo as $row) { */ ?>

 <div align="center"style="font-size: 15px;">
</br>
<?php // var_dump($_SESSION) ?>

<div class="info">
  <form method="post">
   <h2>Profil de <?php echo $_SESSION['nom']; ?> <?php echo $_SESSION['prenom'];?> </h2>
   <br />
   <div class="contenu">
   <b>Nom </b>= <?php echo $_SESSION['nom']; ?>
   <br />
   <b>Prenom</b> = <?php echo $_SESSION['prenom']; ?>
   <br />
   <b>Rang</b> = <?php echo $_SESSION['Role']; ?>
   <br />
   <b>Adresse</b> = <?php echo $_SESSION['adresse']; ?>
   <br />
   <b>Code Postal</b> = <?php echo $_SESSION['cp']; ?>
   <br />
   <b>Ville</b> = <?php echo $_SESSION['ville']; ?>
   <br />
   <b>date d'embauche</b> = <?php echo $_SESSION['dateEmbauche']; ?>
   <br />
 </div>
 <br />
 <button name="modif"  class="btnInfo"><a href="?action=edit">Modifier mes informations </a> </button>
</form>
 </div>
</div>

  <?php/*
} */
?>


  </body>
</html>
