<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>movix</title>
    <link rel="stylesheet" href="../CSS/Formulaire/c3ss.css" />
    <link rel="stylesheet" href="../CSS/Landing/nicepage.css" />
  </head>
  <body class="u-body u-xl-mode">
    <header class="u-clearfix u-header u-header" id="sec-687d"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <nav>
        <ul>
          <div class="color">
            <li><a href="../index.html">Accueil</a></li>
            <li class="deroulant"><a href="#">Séries</a>
              <ul class="sous">
                <li><a href="../Genre/serie.html">Action</a></li>
                <li><a href="../Genre/serie.html">Animation</a></li>
                <li><a href="../Genre/serie.html">Animé</a></li>
                <li><a href="../Genre/serie.html">Aventure</a></li>
                <li><a href="../Genre/serie.html">Biopic</a></li>
                <li><a href="../Genre/serie.html">Catastrophe</a></li>
                <li><a href="../Genre/serie.html">Comédie</a></li>
                <li><a href="../Genre/serie.html">Crime</a></li>
                <li><a href="../Genre/serie.html">Documentaire</a></li>
                <li><a href="../Genre/serie.html">Drame</a></li>
                <li><a href="../Genre/serie.html">Erotique</a></li>
                <li><a href="../Genre/serie.html">Espionnage</a></li>
                <li><a href="../Genre/serie.html">Fantastique</a></li>
                <li><a href="../Genre/serie.html">Fantasy</a></li>
                <li><a href="../Genre/serie.html">Guerre</a></li>
                <li><a href="../Genre/serie.html">Historique</a></li>
                <li><a href="../Genre/serie.html">Horreur</a></li>
                <li><a href="../Genre/serie.html">Musical</a></li>
                <li><a href="../Genre/serie.html">Policier</a></li>
                <li><a href="../Genre/serie.html">Romance</a></li>
                <li><a href="../Genre/serie.html">SF</a></li>
                <li><a href="../Genre/serie.html">Super-Héros</a></li>
                <li><a href="../Genre/serie.html">Survival</a></li>
                <li><a href="../Genre/serie.html">Thriller</a></li>
                <li><a href="../Genre/serie.html">Western</a></li>
              </ul>
            </li>
            <li class="deroulant"><a href="#">Films</a>
              <ul class="sous">
                <li><a href="../Genre/action.php">Action</a></li>
                <li><a href="../Genre/animation.php">Animation</a></li>
                <li><a href="../Genre/anime.php">Animé</a></li>
                <li><a href="../Genre/aventure.php">Aventure</a></li>
                <li><a href="../Genre/biopic.php">Biopic</a></li>
                <li><a href="../Genre/catastrophe.php">Catastrophe</a></li>
                <li><a href="../Genre/comedie.php">Comédie</a></li>
                <li><a href="../Genre/crime.php">Crime</a></li>
                <li><a href="../Genre/documentaire.php">Documentaire</a></li>
                <li><a href="../Genre/drame.php">Drame</a></li>
                <li><a href="../Genre/erotique.php">Erotique</a></li>
                <li><a href="../Genre/espionnage.php">Espionnage</a></li>
                <li><a href="../Genre/fantastique.php">Fantastique</a></li>
                <li><a href="../Genre/fantasy.php">Fantasy</a></li>
                <li><a href="../Genre/guerre.php">Guerre</a></li>
                <li><a href="../Genre/historique.php">Historique</a></li>
                <li><a href="../Genre/horreur.php">Horreur</a></li>
                <li><a href="../Genre/musical.php">Musical</a></li>
                <li><a href="../Genre/policier.php">Policier</a></li>
                <li><a href="../Genre/romance.php">Romance</a></li>
                <li><a href="../Genre/sf.php">SF</a></li>
                <li><a href="../Genre/superheros.php">Super-Héros</a></li>
                <li><a href="../Genre/survival.php">Survival</a></li>
                <li><a href="../Genre/thriller.php">Thriller</a></li>
                <li><a href="../Genre/western.php">Western</a></li>
              </ul>
            </li>
            <li><a href="formulair.php">Formulaire</a></li>
        </div>
        </ul>
      </nav>
    </header>
    <hr noshade width="85%" size="3" align="center">
    
    

  <?php

  include 'database.php';
  global $conn;

   $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES);
   $datee = htmlspecialchars($_POST['datee'], ENT_QUOTES);
   $resumee = htmlspecialchars($_POST['resumee'], ENT_QUOTES);
   $genre1 = htmlspecialchars($_POST['genre1'], ENT_QUOTES);
   $genre2 = htmlspecialchars($_POST['genre2'], ENT_QUOTES);
   $genre3 = htmlspecialchars($_POST['genre3'], ENT_QUOTES);
   $genre4 = htmlspecialchars($_POST['genre4'], ENT_QUOTES);
   $realisateur = htmlspecialchars($_POST['realisateur'], ENT_QUOTES);
   $image = htmlspecialchars($_POST['image'], ENT_QUOTES);
  
  $sql = "INSERT INTO film (nfilm, annee, resumee, genre1, Genre2, genre3, genre4,realiseur,imagee)
  VALUES ('$prenom', '$datee', '$resumee','$genre1','$genre2','$genre3','$genre4','$realisateur','$image')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Votre film nous est bien parvenu. Vous pouvez désormais le retrouver dans les catégories auquel il correspond. ";
  } else {
    echo "Malheureusement, nous n'avons pas pu récupérer votre film. Veuillez réessayer et n'oubliez pas de ne pas mettre de caractère trop spéciaux " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  ?> 

</body>
</html>


 