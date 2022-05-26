
<?php

    function GF($num) {
    
    $genre;
    
    
    switch ($num) {
    case 1:
        $genre="Action";
        break;
    case 2:
        $genre="Animation";
        break;
    case 3:
        $genre="Animé";
        break;
    case 4:
        $genre="Aventure";
        break;
    case 5:
        $genre="Biopic";
        break;
    case 6:
        $genre="Catastrophe";
        break;
    case 7:
        $genre="Comédie";
        break;
    case 8:
        $genre="Crime";
        break;
    case 9:
        $genre="Documentaire";
        break;
    case 10:
        $genre="Drame";
        break;
    case 11:
        $genre="Espionnage";
        break;
    case 12:
        $genre="Erotique";
        break;
    case 13:
        $genre="Fantastique";
        break;
    case 14:
        $genre="Fantasy";
        break;
    case 15:
        $genre="Guerre";
        break;
    case 16:
        $genre="Historique";
        break;
    case 17:
        $genre="Horreur";
        break;
    case 18:
        $genre="Musical";
        break;
    case 19:
        $genre="Policier";
        break;
    case 20:
        $genre="Romance";
        break;
    case 21:
        $genre="SF";
        break;
    case 22:
        $genre="Super-Héros";
        break;
    case 23:
        $genre="Survival";
        break;
    case 24:
        $genre="Thriller";
        break;
    case 25:
        $genre="Western";
        break;
    }

    return $genre;

    }

?>