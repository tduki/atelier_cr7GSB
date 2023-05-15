<?php
session_start();
  if($_SESSION["ok"] != 'oui'){
      header("Location: index.html");
  }

  $_SESSION["loginUser"];
?>
<html>
<!DOCTYPE html>
<!-- langue de la page -->
<html lang="fr">


<!--Paramétrage de l'ongle de page et du lien avec le css-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suivi de votre demmande</title>
  <link rel="icon" type="image/png" href="/images/logo.png">
  <link rel="stylesheet" href="../../CSS/formConsultFrais.css">
</head>

<!--Entete en haut de page avec tout les élements-->
<nav>
    <div class="top">
      <a href="index.html">
        <img src="/images/logo.png" alt="Img logo" sizes="auto">
      </a>
    </div>
    <div class="onglet">
      <a href="formConsultFrais.php">
        <p>Consulation de Frais</p>
      </a>
      <a href="formSaisieFrais.php">
        <p>Saisi des Frais</p>
      </a>
      <p><input type="text" id="Prénom" name="Prenom" placeholder="Rechercher 🔎" required></p>
    </div>
  </nav>


<!-- corps de la page -->

<body>
  <div name="droite" class="wrapper">
    <div name="haut" class="header">
      
    </div>	
    <div name="bas" class="content">	
      <form name="formConsultFrais" method="post" action="chercheFrais.php"><br>
        <h1> Suivi de remboursement des Frais</h1> 
        <label class="titre">Mois/Année :</label>
        <input class="zone" type="text" name="dateConsult" size="12" />
        <p class="titre"></p><br><br>
        <div class="subheader"><h2>Frais au forfait </h2></div>
        <table class="tableau-frais" border="1">
          <tr>
            <th>Repas midi</th>
            <th>Nuitée</th>
            <th>Etape</th>
            <th>Km</th>
            <th>Situation</th>
            <th>Date opération</th>
            <th>Remboursement</th>
          </tr>
          <tr align="center">
            <td width="80"><label size="3" name="repas"/></td>
            <td width="80"><label size="3" name="nuitee"/></td> 
            <td width="80"><label size="3" name="etape"/></td>
            <td width="80"><label size="3" name="km" /></td>
            <td width="80"><label size="3" name="situation" /></td>	
            <td width="80"><label size="3" name="dateOper" /></td>	
            <td width="80"><label size="3" name="dateOper" /></td>						
          </tr>
        </table>
        <p class="titre"></p>
        <div class="subheader"><h2>Hors Forfait</h2></div>
        <table class="tableau-frais" border="1">
          <tr>
            <th>Date</th>
            <th>Libellé</th>
            <th>Montant</th>
            <th>Situation</th>
            <th>Date opération</th>
          </tr>
          <tr align="center">
            <td width="100"><label size="12" name="hfDate1"/></td>
            <td width="220"><label size="30" name="hfLib1"/></td> 
            <td width="90"><label size="10" name="hfMont1"/></td>
            <td width="80"><label size="3" name="hfSitu1" /></td>
            <td width="80"><label size="3" name="hfDateOper1" /></td>		
          </tr>
        </table>	
        <p class="titre"></p>
        <div class="subheader">Nb Justificatifs</div>
        <input type="text" class="zone" size="4" name="hcMontant"/>
      </form>
    </div>
  </div>
</body>



</html>