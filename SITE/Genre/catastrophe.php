<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>movix</title>
    <link rel="stylesheet" href="../CSS/Genre/genre.css" />
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
                <li><a href="serie.html">Action</a></li>
                <li><a href="serie.html">Animation</a></li>
                <li><a href="serie.html">Animé</a></li>
                <li><a href="serie.html">Aventure</a></li>
                <li><a href="serie.html">Biopic</a></li>
                <li><a href="serie.html">Catastrophe</a></li>
                <li><a href="serie.html">Comédie</a></li>
                <li><a href="serie.html">Crime</a></li>
                <li><a href="serie.html">Documentaire</a></li>
                <li><a href="serie.html">Drame</a></li>
                <li><a href="serie.html">Erotique</a></li>
                <li><a href="serie.html">Espionnage</a></li>
                <li><a href="serie.html">Fantastique</a></li>
                <li><a href="serie.html">Fantasy</a></li>
                <li><a href="serie.html">Guerre</a></li>
                <li><a href="serie.html">Historique</a></li>
                <li><a href="serie.html">Horreur</a></li>
                <li><a href="serie.html">Musical</a></li>
                <li><a href="serie.html">Policier</a></li>
                <li><a href="serie.html">Romance</a></li>
                <li><a href="serie.html">SF</a></li>
                <li><a href="serie.html">Super-Héros</a></li>
                <li><a href="serie.html">Survival</a></li>
                <li><a href="serie.html">Thriller</a></li>
                <li><a href="serie.html">Western</a></li>
              </ul>
            </li>
            <li class="deroulant"><a href="#">Films</a>
              <ul class="sous">
                <li><a href="action.php">Action</a></li>
                <li><a href="animation.php">Animation</a></li>
                <li><a href="anime.php">Animé</a></li>
                <li><a href="aventure.php">Aventure</a></li>
                <li><a href="biopic.php">Biopic</a></li>
                <li><a href="catastrophe.php">Catastrophe</a></li>
                <li><a href="comedie.php">Comédie</a></li>
                <li><a href="crime.php">Crime</a></li>
                <li><a href="documentaire.php">Documentaire</a></li>
                <li><a href="drame.php">Drame</a></li>
                <li><a href="erotique.php">Erotique</a></li>
                <li><a href="espionnage.php">Espionnage</a></li>
                <li><a href="fantastique.php">Fantastique</a></li>
                <li><a href="fantasy.php">Fantasy</a></li>
                <li><a href="guerre.php">Guerre</a></li>
                <li><a href="historique.php">Historique</a></li>
                <li><a href="horreur.php">Horreur</a></li>
                <li><a href="musical.php">Musical</a></li>
                <li><a href="policier.php">Policier</a></li>
                <li><a href="romance.php">Romance</a></li>
                <li><a href="sf.php">SF</a></li>
                <li><a href="superheros.php">Super-Héros</a></li>
                <li><a href="survival.php">Survival</a></li>
                <li><a href="thriller.php">Thriller</a></li>
                <li><a href="western.php">Western</a></li>
              </ul>
            </li>
            <li><a href="../formulaire/formulair.php">Formulaire</a></li>
        </div>
        </ul>
      </nav>
    </header>
    <hr noshade width="85%" size="3" align="center">
    <!--Fin du menu-->
    
    <?php

        include '../formulaire/database2.php';
        include '../Fonction/fonction.php';
        global $db;
        $genre1;
        $genre2;
        $genre3;
        $genre4;
        
        $q = $db->query("SELECT * FROM film"); 
        while($film = $q->fetch()){
            if ($film['genre1']=='6' || $film['Genre2']=='6' || $film['genre3']=='6' || $film['genre4']=='6'){
              $genre1=GF($film['genre1']);
              $genre2=GF($film['Genre2']);
              $genre3=GF($film['genre3']);
              $genre4=GF($film['genre4']);
              $url=$film['imagee'];
              ?>
                <div class="try">
                  
                    <a class="titrefilm"><?= $film['nfilm'];?><br></a>
                    <img class="image" src="<?=$url;?>">
                    <a class="film"><br><?= $genre1;?></a>
                    <a class="film"><?= $genre2;?></a>
                    <a class="film"><?= $genre3;?></a>
                    <a class="film"><?= $genre4;?></a>
                    <a class="film"><br><b>Réalisé par: </b><?= $film['realiseur'];?><br></a>
                    <a class="film"><b>Date de sortie: </b><?= $film['annee'];?><br></a>
                    <a class="film"><?= $film['resumee'];?><br></a>
                  
                </div>
              <?php 

            }
        }
    ?>

  </body>
</html>


