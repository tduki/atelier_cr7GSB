<?php
session_start();
  if($_SESSION["ok"] != 'oui'){
      header("Location: index.html");
  }

  $_SESSION["loginUser"] = $loginSaisie;
?>

<html>

<head>
  <title>Validation des frais de visite</title>
  <link rel="stylesheet" href="/CSS/SuivrePaimentFrais.css">
 <link rel="icon" type="image/png" href="/images/logo.png">
 <link rel="stylesheet" href="../../CSS/SuivrePaimentFrais.css">
</head>

<body>
  <nav>
    <div class="top"><a href="index.html">
      <img src="/images/logo.png" alt="Img logo" sizes="auto">

      

      </a>
    </div>
    <div class="onglet">

      <a href="/HTML/comptable/formValidFrais.html">
        <p>Valider des Frais</p>
      </a>
      <a href="/HTML/comptable/SuivrePaimentFrais.html">
        <p>Suivre paiment fiche de frais</p>
      </a>

      <a href="HTML/connexion.html">
        <p>Connexion</p>
      </a>
      <p><input type="text" id="Prénom" name="Prénom" placeholder="Rechercher 🔎" required></p>
    </div>
  </nav>
 <h1>Validation de fiche de frais</h1>
    <form>
        <label for="visiteur">Visiteur :</label>
        <select id="visiteur" name="visiteur">
            <option value="">Sélectionnez un visiteur</option>
            <option value="1">Jean Dupont</option>
            <option value="2">Marie Martin</option>
            <option value="3">Pierre Durand</option>
        </select>
        <br>
        <label for="mois">Mois :</label>
        <select id="mois" name="mois">
            <option value="">Sélectionnez un mois</option>
            <option value="202201">Janvier 2022</option>
            <option value="202202">Février 2022</option>
            <option value="202203">Mars 2022</option>
        </select>
        <br>
        <button type="button" onclick="afficherFiche()">Afficher la fiche</button>
    </form>
    <div id="fiche" style="display: none;">
        <h2>Détail de la fiche de frais</h2>
        <table>
            <tr>
                <th>Type de frais</th>
                <th>Montant forfaitisé</th>
                <th>Montant hors forfait</th>
            </tr>
            <tr>
                <td>Kilométrage</td>
                <td>100</td>
                <td><input type="text" id="hf1" value="0"></td>
            </tr>
            <tr>
                <td>Nuitée hôtel</td>
                <td>80</td>
                <td><input type="text" id="hf2" value="0"></td>
            </tr>
            <tr>
                <td>Repas restaurant</td>
                <td>25</td>
                <td><input type="text" id="hf3" value="0"></td>
            </tr>
        </table>
        <br>
       

</body>