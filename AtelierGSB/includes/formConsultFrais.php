<?php
  
  // Traitement du formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dateConsult = $_POST["dateConsult"];

    // Requête SQL pour récupérer les frais au forfait
    $fraisForfaitQuery = "SELECT repas, nuitee, etape, km, situation, date_oper, remboursement FROM frais_forfait WHERE mois_annee = '$dateConsult'";
    $fraisForfaitResult = $connexion->query($fraisForfaitQuery) or die ("Erreur dans la requête ".$fraisForfaitQuery);

    // Requête SQL pour récupérer les frais hors forfait
    $fraisHorsForfaitQuery = "SELECT date, libelle, montant, situation, date_oper FROM frais_hors_forfait WHERE mois_annee = '$dateConsult'";
    $fraisForfaitResult = $connexion->query($fraisHorsForfaitQuery) or die ("Erreur dans la requête ".$fraisHorsForfaitQuery);

    // Afficher les frais au forfait
    while ($fraisForfaitRow = mysqli_fetch_assoc($fraisForfaitResult)) {
      $repas = $fraisForfaitRow["repas"];
      $nuitee = $fraisForfaitRow["nuitee"];
      $etape = $fraisForfaitRow["etape"];
      $km = $fraisForfaitRow["km"];
      $situationForfait = $fraisForfaitRow["situation"];
      $dateOperForfait = $fraisForfaitRow["date_oper"];
      $remboursement = $fraisForfaitRow["remboursement"];

      // Afficher les frais au forfait dans le tableau HTML
      echo "<tr align='center'>";
      echo "<td width='80'><label size='3'>$repas</label></td>";
      echo "<td width='80'><label size='3'>$nuitee</label></td>";
      echo "<td width='80'><label size='3'>$etape</label></td>";
      echo "<td width='80'><label size='3'>$km</label></td>";
      echo "<td width='80'><label size='3'>$situationForfait</label></td>";
      echo "<td width='80'><label size='3'>$dateOperForfait</label></td>";
      echo "<td width='80'><label size='3'>$remboursement</label></td>";
      echo "</tr>";
    }

    // Afficher les frais hors forfait
    while ($fraisHorsforfait = $reqFraisHorsForfait->fetch()) {
      $libelle = $fraisHorsForfait['libelle'];
      $date = $fraisHorsForfait['date'];
      $montant = $fraisHorsForfait['montant'];
    }
?>
