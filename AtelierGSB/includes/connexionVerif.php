<?php
  session_start();
  require("connexionBdd.php");

//On récupère les données saisies dans le formulaire
  $loginSaisie = $_POST["login"];
  $motPasseSaisie = $_POST["mdpasse"];

//On récupère dans la base de données le mot de passe qui corespond au nom saisie par le visiteur
  $reqSql = "SELECT mdp, role FROM user WHERE login = '$loginSaisie'";

  $res = $connexion->query($reqSql);

  //parcours du jeu d'enregistrements : selection du premier enregistrement
  $ligne = $res->fetch();
  //On affecte la valeur de chaque cellule de tableau à une variable

  $motDePasseBdd = $ligne['mdp'];
  $resRole = $ligne['role'];
  $_SESSION['leRole'] = $resRole;
  //On vérifie que le mot de passe saisie est identique à celui enregistré dans la base de données

   if($motPasseSaisie != $motDePasseBdd){
     //Le mot de passe saisie est different de celui de la base utilisateur
     //header("Location : ../../comptableAccueil.php");
    echo "<script>alert('Votre saisie est erroné, Recommencez svp')</script>";
   }else{
     //Le mot de passe saisi correspond à celui de la base utilisateur
     
     $_SESSION["ok"] = "oui";
     $_SESSION["loginUser"] = $loginSaisie;

     // Affiche la page réservée aux utilisateurs autorisés
     if($resRole == "comptable"){
       header("Location: ../HTML/comptable/comptableAccueil.php");
       //echo "<script>alert('Bienvenue sur la page réservée aux comptables !')</script>";
     }elseif($resRole == "visiteur"){
       header("Location: ../HTML/visiteur/visitAccueil.php");
       //echo '<script>alert("Bienvenue sur la page réservée aux visiteurs !")</script>';
     }  
    }
      
?>