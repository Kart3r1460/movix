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
    
    <h1 id="centrer">Envie d'ajouter un film?</h1>
    <p id="t">Notre catalogue n'est pas assez complet? Et bien vous pouvez contribuer à son contenu en remplissant le formulaire mis à votre disposition.
  
        <!--...l'attribut name sert pour le traitement des données avec le php... -->
        <form action="encodage.php" method="post">
            <div class="c100">
                <label  for="nom">Nom du film </label>
                <input type="text" class ="color1" id="nom" name="prenom" required> <!--...Si l'id et le for  sont les mêmes alors ils le formulaire est lié au texte... -->  
            </div>

            <div class="c100">
                <label  for="datee">Date de sortie</label>
                <input type="text" class ="color1" id="datee" name="datee" required> <!--...require oblige à remplir... --> 
            </div>

            <div class="c100">
                <label  for="realisateur">Réalisateur</label>
                <input type="text" class ="color1" id="realisateur" name="realisateur" required>  
            </div>

            <div class="c100">
                <label  for="résumé">Résumé</label>
                <textarea class ="textarea" type="text" id="résumé" name="resumee" required></textarea>  
            </div>
            <div class="c100"> <!--...mettre des restriction... --> 
                <label  for="image">Veuillez inséser l'url d'une image</label>
                <input type="text" class ="color1" id="image" name="image" required>
                <!--<input type="file" id="image" name="image" accept="image/png, image/jpeg"> --> 
            </div>
            <div class="c100">
                <select  name="genre1">
                  <table>
                      <option value=1>Action</option>
                      <option value=2>Animation</option>
                      <option value=3>Animé</option>
                      <option value=4>Aventure</option>
                      <option value=5>Biopic</option>
                      <option value=6>Catastrophe</option>
                      <option value=7>Comédie</option>
                      <option value=8>Crime</option>
                      <option value=9>Documentaire</option>
                      <option value=10>Drame</option>
                      <option value=11>Espionnage</option>
                      <option value=12>Erotique</option>
                      <option value=13>Fantastique</option>
                      <option value=14>Fantasy</option>
                      <option value=15>Guerre</option>
                      <option value=16>Historique</option>
                      <option value=17>Horreur</option>
                      <option value=18>Musical</option>
                      <option value=29>Policier</option>
                      <option value=20>Romance</option>
                      <option value=21>SF</option>
                      <option value=22>Super-Héros</option>
                      <option value=23>Survival</option>
                      <option value=24>Trhiller</option>
                      <option value=25>Western</option>
                  </select>
            </div>
            <div class="c100">
              <select id="genre" name="genre2">
              <option value=1>Action</option>
                      <option value=2>Animation</option>
                      <option value=3>Animé</option>
                      <option value=4>Aventure</option>
                      <option value=5>Biopic</option>
                      <option value=6>Catastrophe</option>
                      <option value=7>Comédie</option>
                      <option value=8>Crime</option>
                      <option value=9>Documentaire</option>
                      <option value=10>Drame</option>
                      <option value=11>Espionnage</option>
                      <option value=12>Erotique</option>
                      <option value=13>Fantastique</option>
                      <option value=14>Fantasy</option>
                      <option value=15>Guerre</option>
                      <option value=16>Historique</option>
                      <option value=17>Horreur</option>
                      <option value=18>Musical</option>
                      <option value=29>Policier</option>
                      <option value=20>Romance</option>
                      <option value=21>SF</option>
                      <option value=22>Super-Héros</option>
                      <option value=23>Survival</option>
                      <option value=24>Trhiller</option>
                      <option value=25>Western</option>
              </select>
          </div>
          <div class="c100">
            <select id="genre" name="genre3">
            <option value=1>Action</option>
                      <option value=2>Animation</option>
                      <option value=3>Animé</option>
                      <option value=4>Aventure</option>
                      <option value=5>Biopic</option>
                      <option value=6>Catastrophe</option>
                      <option value=7>Comédie</option>
                      <option value=8>Crime</option>
                      <option value=9>Documentaire</option>
                      <option value=10>Drame</option>
                      <option value=11>Espionnage</option>
                      <option value=12>Erotique</option>
                      <option value=13>Fantastique</option>
                      <option value=14>Fantasy</option>
                      <option value=15>Guerre</option>
                      <option value=16>Historique</option>
                      <option value=17>Horreur</option>
                      <option value=18>Musical</option>
                      <option value=29>Policier</option>
                      <option value=20>Romance</option>
                      <option value=21>SF</option>
                      <option value=22>Super-Héros</option>
                      <option value=23>Survival</option>
                      <option value=24>Trhiller</option>
                      <option value=25>Western</option>
            </select>
        </div>
        <div class="c100">
          <select id="genre" name="genre4">
          <option value=1>Action</option>
                      <option value=2>Animation</option>
                      <option value=3>Animé</option>
                      <option value=4>Aventure</option>
                      <option value=5>Biopic</option>
                      <option value=6>Catastrophe</option>
                      <option value=7>Comédie</option>
                      <option value=8>Crime</option>
                      <option value=9>Documentaire</option>
                      <option value=10>Drame</option>
                      <option value=11>Espionnage</option>
                      <option value=12>Erotique</option>
                      <option value=13>Fantastique</option>
                      <option value=14>Fantasy</option>
                      <option value=15>Guerre</option>
                      <option value=16>Historique</option>
                      <option value=17>Horreur</option>
                      <option value=18>Musical</option>
                      <option value=29>Policier</option>
                      <option value=20>Romance</option>
                      <option value=21>SF</option>
                      <option value=22>Super-Héros</option>
                      <option value=23>Survival</option>
                      <option value=24>Trhiller</option>
                      <option value=25>Western</option>
            </select>
          </div>
            <div class="c100" id="submit">
                <input type="submit" name ="send" id ="send" value="Envoyer">
            </div>
        </form>
        <p><br><br><br></p>
  
  </body>
</html>


