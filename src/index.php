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
      </ul>
    </div>
  </header>
  <br>
  <div class="lesEquipes">

<?php

include('gestionBDD.php');

  $bdd = new gestionBDD('postgres', 'bpsen', 'LIGUE1');
    $cnx = $bdd->getCnx();

    $req = $cnx->prepare("SELECT EQUIPE.nom, logo FROM EQUIPE;");
    $req->execute();

  while($ligne = $req->fetch()){ ?>
    <a href="presentation.php?equipe=<?php echo $ligne[0] ?>" >
    <div class="uneEquipe">
      <span><?php echo $ligne[0] ?> </span>
      <br>
      <span><?php echo '<img  width=100 height=100 src="'. $ligne[1] . '">' ?> </span>

    </div>
    </a>
    
    <?php }
  


  ?>


 

</div>
</body>
</html>
