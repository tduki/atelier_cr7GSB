<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupération des données du formulaire
  $periode_engagement_mois = $_POST['periode_engagement_mois'];
  $periode_engagement_annee = $_POST['periode_engagement_annee'];
  $repas_midi = $_POST['repas_midi'];
  $nuitees = $_POST['nuitees'];
  $etape = $_POST['etape'];
  $km = $_POST['km'];
  
  // Tableau pour stocker les frais hors forfait
  $frais_hors_forfait = array();

  // Récupération des données de chaque ligne de frais hors forfait
  $i = 1;
  while (isset($_POST["hf_date_$i"])) {
    $hf_date = $_POST["hf_date_$i"];
    $hf_libelle = $_POST["hf_libelle_$i"];
    $hf_montant = $_POST["hf_montant_$i"];

    // Ajout des données dans le tableau
    $frais_hors_forfait[] = array(
      'date' => $hf_date,
      'libelle' => $hf_libelle,
      'montant' => $hf_montant
    );

    $i++;
  }

  // Traitement des données récupérées
  // ...

  // Affichage d'un message de confirmation
  echo "La demande a bien été enregistrée.";

}