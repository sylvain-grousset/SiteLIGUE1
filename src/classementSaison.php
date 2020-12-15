<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>


<body>
  <header>
    <div class="nav">
      <ul>
        <li class="accueil"><a href="index.php">Accueil</a></li>
        <li class="classementSaison"><a class="active" href="#">Classement</a></li>
        <li class="about"><a href="#">About</a></li>
      </ul>
    </div>
  </header>

<?php
include('gestionBDD.php');

    $bdd = new gestionBDD('postgres', 'P@ssw0rdsio', 'LIGUE1');
    $cnx = $bdd->getCnx();

    $req = $cnx->prepare("SELECT EQUIPE.nom, SCORE.matchsjoues, SCORE.points, gagne, egalite, perdu, butpour, butcontre
    FROM SCORE
    INNER JOIN EQUIPE on SCORE.id_equipe = EQUIPE.id_equipe;");
    $req->execute();
    
    echo "<table><tr><td>Nom de l'équipe</td><td>MatchJoues</td><td>Points</td><td>Gagnés</td><td>Egalités</td><td>Perdu</td><td>ButPour</td><td>ButContre</td></tr>";
    while($ligne = $req->fetch()){
       
        echo "<tr><td>" . $ligne[0] . "</td> <td>" . $ligne[1] . "</td> <td>" . $ligne[2] . "</td><td>" . $ligne[3] . "</td><td>" . "</td><td>" . $ligne[4] . "</td><td>" . "</td><td>
        " . $ligne[5] . "</td><td>" . "</td><td>" . $ligne[6] . "</td><td>" . "</td><td>" . $ligne[7] . "</td></tr>";
    }
    echo "</table>";


?>




</body>
</html>
