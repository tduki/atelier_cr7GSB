<?php
session_start();
  if($_SESSION["ok"] != 'oui'){
      header("Location: index.html");
  }

  $_SESSION["loginUser"];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Effectuer une demmande</title>
  <link rel="icon" type="/image/png" href="/images/logo.png">
  <link href="../../CSS/formSaisieFrais.css" rel="stylesheet" type="text/css" />
  <link href="script.js" rel="stylesheet" type="text/javascript" />
</head>

<body>
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
  <h1>Effectuer une demande </h1>


  <form action="saisieFrais.php" method="POST">
    <fieldset>
      <legend>Saisie</legend><br>
      <div>
        <label for="periode_engagement_mois">PERIODE D'ENGAGEMENT : Mois (2 chiffres) :</label>
        <input type="number" id="periode_engagement_mois" name="periode_engagement_mois" min="1" max="12" required>
      </div>
      <div>
        <label for="periode_engagement_annee">Année (4 chiffres) :</label>
        <input type="number" id="periode_engagement_annee" name="periode_engagement_annee" min="2020" max="2023" required>
      </div>
    </fieldset>
    <fieldset>
      <legend>Frais au forfait</legend><br>
      <div>
        <label for="repas_midi">Repas midi :</label>
        <input type="text" id="repas_midi" name="repas_midi" min="0">
        <?php
            $moisSaisie = $_POST["periode_engagement_mois"];
            $qutSaisie = $_POST["repas_midi"];
            $reqSql = "INSERT INTO LigneFraisForfait VALUES('$loginSaisie', '$moisSaise', 'REP', '$qutSaisie')";
            $res = $connexion->exec($reqSql) or die("Erreur dans la requête ".$reqSql);
            echo $res;
        ?>
      </div>
      <div>
        <label for="nuitees">Nuitées :</label>
        <input type="text" id="nuitees" name="nuitees" min="0">
                <?php
            $moisSaisie = $_POST["periode_engagement_mois"];
            $qutSaisie = $_POST["nuitees"];
            $reqSql = "INSERT INTO LigneFraisForfait VALUES('$loginSaisie', '$moisSaise', 'NUI', '$qutSaisie')";
            $res = $connexion->exec($reqSql) or die("Erreur dans la requête ".$reqSql);
            echo $res;
        ?>
      </div>
      <div>
        <label for="etape">Etape :</label>
        <input type="text" id="etape" name="etape" min="0">
                <?php
            $moisSaisie = $_POST["periode_engagement_mois"];
            $qutSaisie = $_POST["etape"];
            $reqSql = "INSERT INTO LigneFraisForfait VALUES('$loginSaisie', '$moisSaise', 'ETP', '$qutSaisie')";
            $res = $connexion->exec($reqSql) or die("Erreur dans la requête ".$reqSql);
            echo $res;
        ?>
      </div>
      <div>
        <label for="km">Km :</label>
        <input type="text" id="km" name="km" min="0">
                <?php
            $moisSaisie = $_POST["periode_engagement_mois"];
            $qutSaisie = $_POST["km"];
            $reqSql = "INSERT INTO LigneFraisForfait VALUES('$loginSaisie', '$moisSaise', 'KM', '$qutSaisie')";
            $res = $connexion->exec($reqSql) or die("Erreur dans la requête ".$reqSql);
            echo $res;
        ?>
      </div>
    </fieldset>
    <fieldset>
      <legend>Hors Forfait</legend><br>
      <div id="hors_forfait_container">
        <div>
          <label for="hf_date_1">Date :</label>
          <input type="date" id="hf_date_1" name="hf_date_1" required>
          <label for="hf_libelle_1">Libellé :</label>
          <input type="text" id="hf_libelle_1" name="libelle" required>
          <label for="hf_montant_1">Montant :</label>
          <input type="number" id="hf_montant_1" name="montant" min="0" required>
                            <?php
            $moisSaisie = $_POST["periode_engagement_mois"];
            $libelleSaisie = $_POST["libelle"];
            $montantSaisie = $_POST["montant"];
            $dateSaisie = $_POST["hf_date_"];
            $dateSaisie = date('Y-m-d');
            $reqSql = "INSERT INTO LigneFraisHorsForfait VALUES(null, '$loginSaisie', '$moisSaisie', '$libelleSaisie' , '$dateSaisie', $montantSaisie', 'REP', '$qutSaisie')";
            $res = $connexion->exec($reqSql) or die("Erreur dans la requête ".$reqSql);
            echo $res;
        ?>
        </div>
      </div><br>
      <button type="button" id="add_hors_forfait">Ajouter une ligne</button>
    </fieldset><br>
    <div>
      <button type="submit">Envoyer</button>
      <button type="reset">Réinitialiser</button>
    </div>
  </form>




  <script>
    // Récupération des éléments HTML nécessaires
    const container = document.getElementById("hors_forfait_container");
    const addButton = document.getElementById("add_hors_forfait");

    // Compteur pour le nombre de lignes
    let count = 1;

    // Fonction pour ajouter une nouvelle ligne
    function addNewLine() {
      // Création de la nouvelle ligne en HTML
      const newLine = document.createElement("div");
      newLine.innerHTML = `
    <label for="hf_date_${count + 1}">Date :</label>
    <input type="date" id="hf_date_${count + 1}" name="hf_date_${count + 1}" required>
    <label for="hf_libelle_${count + 1}">Libellé :</label>
    <input type="text" id="hf_libelle_${count + 1}" name="hf_libelle_${count + 1}" required>
    <label for="hf_montant_${count + 1}">Montant :</label>
    <input type="number" id="hf_montant_${count + 1}" name="hf_montant_${count + 1}" min="0" required>`;

      // Ajout de la nouvelle ligne au conteneur
      container.appendChild(newLine);

      // Incrémentation du compteur
      count++;
    }

    // Ajout d'un écouteur d'événement au bouton "Ajouter une ligne"
    addButton.addEventListener("click", addNewLine);

  </script>
</body>

</html>