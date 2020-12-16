<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>


<body>
  <header>
    <div class="nav">
      <ul>
        <li class="accueil"><a  href="index.php">Accueil</a></li>
        <li class="classementSaison"><a href="classementSaison.php">Classement</a></li>
      </ul>
    </div>
  </header>
</div>
<h1><center>Présentation de l'équipe</center></h1>
<?php
include('gestionBDD.php');

$equipeEntree = $_GET["equipe"];


  $bdd = new gestionBDD('postgres', 'bpsen', 'LIGUE1');
    $cnx = $bdd->getCnx();

    $req = $cnx->query("SELECT EQUIPE.nom, stade, ville, logo FROM EQUIPE WHERE nom = '$equipeEntree';");
    $req->execute();

    $ligne = $req->fetch();

    echo '<center><b>';
    echo '<p>Nom de l equipe :' .  $ligne[0];
    echo '<br>';
    echo '<p>Stade de l equipe :' .$ligne[1];
    echo '<br>';
    echo '<p>Ville de l equipe :' .$ligne[2];
    echo '<br><br><br>';
    echo '<img  width=100 height=100 src="'. $ligne[3] . '">';

    echo '</center>';
    

?>

</body>
</html>




