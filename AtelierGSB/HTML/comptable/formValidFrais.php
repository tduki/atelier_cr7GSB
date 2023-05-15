<?php
session_start();
  if($_SESSION["ok"] != 'oui'){
      header("Location: index.html");
  }

  $_SESSION["loginUser"] = $loginSaisie;
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
  <title>Valider votre demmande</title>
  <link rel="icon" type="image/png" href="/images/logo.png">
  <link rel="stylesheet" href="../../CSS/formValidFrais.css">
</head>

<!--Entete en haut de page avec tout les élements-->
  
<body>
  <nav>
    <div class="top">
      <a href="/index.html">
        <img src="/images/logo.png" alt="Img logo" sizes="auto">
      </a>
    </div>
    <div class="onglet">
         <a href="/HTML/comptable/formValidFrais.html">
        <p>Valider les frais</p>
      </a>
      <a href="/HTML/comptable/SuivrePaimentFrais.html">
        <p>Suivre paiment fiche de frais</p>
      </a>

      <a href="deconnexion.php">
        <p>deconnexion</p>
      </a>
      <p><input type="text" id="Prénom" name="Prénom" placeholder="Rechercher 🔎" required></p>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        
        <form class="form-horizontal" name="formValidFrais">
          <h1 class="text-center">Validation des frais par visiteurs</h1>
          <div class="form-group row">
            <label class="col-md-2 col-form-label">Choisir le visiteur :</label>
            <div class="col-md-10">
              <select class="form-control" name="lstVisiteur">
                <option value="*">---Choisir utilisateur---</option>
                <?php
                
                $reqSQL = "SELECT nom, prenom FROM user WHERE role = 'visiteur'";
                // Exécute la requête
                $result=$connexion->query($reqSQL) or die("Erreur dans la requête ".$reqSql);
                // Lecture de la 1‚re ligne du jeu d'enregistrements
                $ligne = $result->fetch();
                // Tant qu'on n'a pas atteint la fin du jeu d'enregistrements, on boucle
                while ($ligne != false)
                { // On stocke les données 
                    $id = $ligne["id"];
                    $nom= $ligne["nom"];
                    // On génère une ligne dans la liste déroulante
                    echo "<option value=".$id.">".$nom."</option>";
                    // Lecture de la ligne suivante dans le jeu d'enregistrements
                    $ligne = $result->fetch();
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 col-form-label">Mois :</label>
            <div class="col-md-10">
              <input class="form-control" type="text" name="dateValid" size="12">
            </div>
          </div>
          <div class="form-group">
            <h2>Frais au forfait</h2>
            <table class="table table-bordered">
              <thead class="thead-dark">
              <tr>
                <th>Repas midi</th>
                <th>Nuitée</th>
                <th>Etape</th>
                <th>Km</th>
                <th>Situation</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><text class="form-control" name="repas">
                  <?php
                      $moiSaisie = $_POST["dateValid"];
                  
                      $reqSql ="SELECT lignesfraisforfait.quantite
                                FROM fichefrais
                                JOIN lignefraisforfait
                                ON lignesfraisforfait.idVisiteur = fraisforfait.idVisiteur
                                JOIN fraisforfait
                                ON lignefraisforfait.idFraisForfait = fraisforfait.id
                          
                                WHERE idVisiteur = (SELECT id
                                                    FROM visiteur
                                                    WHERE nom = '$nom')
                                AND id.FraisForfait = 'REP'
                                AND mois.lignesfraisforfait = '$moiSaisie';";
                      $res = $connexion->query($reqSql) or die("Erreur dans la requête ".$reqSql);
                      $ligne = $res->fetch();
                      //$resultat = $ligne[0];
                      var_dump($ligne[0]);
                  ?>
                </text>
                </td>
                <td><text class="form-control" name="nuitee">
                                  <?php
                  $moiSaisie = $_POST["dateValid"];
                      $reqSql ="SELECT lignesfraisforfait.quantite
                                FROM fichefrais
                                JOIN lignefraisforfait
                                ON lignesfraisforfait.idVisiteur = fraisforfait.idVisiteur
                                JOIN fraisforfait
                                ON lignefraisforfait.idFraisForfait = fraisforfait.id
                          
                                WHERE idVisiteur = (SELECT id
                                                    FROM visiteur
                                                    WHERE nom = '$nom')
                                AND id.FraisForfait = 'NUI'
                               AND mois.lignesfraisforfait = '$moiSaisie';"
                    $res = $connexion->query($reqSql) or die("Erreur dans la requête ".$reqSql);
                    $ligne = $res->fetch();
                    //$resultat = $ligne[0];
                    var_dump($ligne[0]);
                  ?>
                </text>
                </td>
                <td><text class="form-control" name="etape">                                     
                  <?php
                  $moiSaisie = $_POST["dateValid"];
                      $reqSql ="SELECT lignesfraisforfait.quantite
                                FROM fichefrais
                                JOIN lignefraisforfait
                                ON lignesfraisforfait.idVisiteur = fraisforfait.idVisiteur
                                JOIN fraisforfait
                                ON lignefraisforfait.idFraisForfait = fraisforfait.id
                          
                                WHERE idVisiteur = (SELECT id
                                                    FROM visiteur
                                                    WHERE nom = '$nom')
                                AND id.FraisForfait = 'ETP'
                                AND mois.lignesfraisforfait = '$moiSaisie';"
                    $res = $connexion->query($reqSql) or die("Erreur dans la requête ".$reqSql);
                    $ligne = $res->fetch();
                    //$resultat = $ligne[0];
                    var_dump($ligne[0]);
                  ?>  
                  </td>
                <td><text class="form-control" name="km">                                     
                  <?php
                  $moiSaisie = $_POST["dateValid"];
                      $reqSql ="SELECT lignesfraisforfait.quantite
                                FROM fichefrais
                                JOIN lignefraisforfait
                                ON lignesfraisforfait.idVisiteur = fraisforfait.idVisiteur
                                JOIN fraisforfait
                                ON lignefraisforfait.idFraisForfait = fraisforfait.id
                          
                                WHERE idVisiteur = (SELECT id
                                                    FROM visiteur
                                                    WHERE nom = '$nom')
                                AND id.FraisForfait = 'KM'
                                AND mois.lignesfraisforfait = '$moiSaisie';"
                    $res = $connexion->query($reqSql) or die("Erreur dans la requête ".$reqSql);
                    $ligne = $res->fetch();
                    //$resultat = $ligne[0];
                    var_dump($ligne[0]);
                  ?>   
                  </td>
                <td>
                  <select class="form-control" size="3" name="situ">
                    <option value="Enregistré"></option>
                    <option value="Validé"></option>
                    <option value="Remboursé"></option>
                  </select>
                  <?php
                    $etatSaisie = $_POST['situ'];
                    $idVisiteur = $_SESSION["login"];
                    $req = "INSERT INTO Etat VALUES('$idVisiteur', '$etatSaisie')";
                    $resultat = $connexion->exec($req) or die("Erreur dans la requête ".$req);
                  ?>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="form-group">
            <h2>Hors Forfait</h2>
            <table class="table table-bordered">
              <thead class="thead-dark">
              <tr>
                <th>Date</th>
                <th>Libellé</th>
                <th>Montant</th>
             <th>Situation</th>
  </tr>
  <tr align="center">
    <td width="100">
      <input type="date" size="12" class="hfDate1" name="hfDate1">
    </td>
    <td width="220">
      <input type="text" size="30" class="hfLib1" name="hfLib1">
    </td>
    <td width="90">
      <input type="number" size="10" class="hfMont1" name="hfMont1">
    </td>
    <td width="80">
      <select size="3" name="hfSitu1">
        <option value="E">Enregistré</option>
        <option value="V">Validé</option>
        <option value="R">Remboursé</option>
      </select>
    </td>
  </tr>
</table>
<p class="titre"></p>
<div class="titre">Nb Justificatifs</div>
<input type="text" class="zone" size="4" name="hcMontant">
<p class="titre">
<label class="titre">&nbsp;</label>
<input class="zone" type="reset">
<input class="zone" type="submit">
      </form>
    </div>
  </div>
</body>

</html>

