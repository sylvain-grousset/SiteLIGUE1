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
<br> 

<?php
include('gestionBDD.php');

    $bdd = new gestionBDD('postgres', 'P@ssw0rdsio', 'LIGUE1');
    $cnx = $bdd->getCnx();

    $req = $cnx->prepare("SELECT EQUIPE.nom, SCORE.matchsjoues, SCORE.points, gagne, egalite, perdu, butpour, butcontre
    FROM SCORE
    INNER JOIN EQUIPE on SCORE.id_equipe = EQUIPE.id_equipe;");
    $req->execute();
    
    echo "<div class='leTableau'><div class='lebandeau'><span>Nom de l'équipe</span> <span>MatchJoues</span> <span>Points</span> <span>Gagnés </span><span>Egalités</span> <span>Perdu </span><span>ButPour </span><span>ButContre </span></div>";
    while($ligne = $req->fetch()){
       ?>

        <div class="uneLigne">
         <span><?php echo $ligne[0] ?> </span>
         <span><?php echo $ligne[1] ?></span>
         <span><?php echo $ligne[2] ?></span>
         <span><?php  echo $ligne[3] ?></span>
         <span><?php echo $ligne[4] ?> </span>
         <span><?php echo $ligne[5] ?></span>
         <span><?php echo $ligne[6] ?></span>
         <span><?php echo $ligne[7] ?></span>
        </div>


        <?php
    }
    echo "</div>";


?>




</body>
</html>
