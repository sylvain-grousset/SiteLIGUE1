<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>


<body>
  <header>
    <div class="nav">
      <ul>
        <li class="accueil"><a class="active" href="index.php">Accueil</a></li>
        <li class="classementSaison"><a href="classementSaison.php">Classement</a></li>
        <li class="about"><a href="#">About</a></li>
      </ul>
    </div>
  </header>
  <br>
  <div id=test>
<?php
include('gestionBDD.php');

  $bdd = new gestionBDD('postgres', 'P@ssw0rdsio', 'LIGUE1');
    $cnx = $bdd->getCnx();

    $req = $cnx->prepare("SELECT EQUIPE.nom, logo FROM EQUIPE;");
    $req->execute();

    $compteur = 0;
  while($ligne = $req->fetch()){
    $compteur++;
    echo "<table id=".$compteur."><tr><td>" .$ligne[0] . "</td></tr>";
    echo "<tr><td><img width=100 height=100 src=". $ligne[1] . "></td></tr></table>";

    if ($compteur == 3){
      echo "<br>";
    }
  }


    ?>

</div>
</body>
</html>
