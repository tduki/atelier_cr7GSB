<?php
  inculde("includes/Php/connexion.php");
?>
  <select name="classe">
      <?php
      <option value="*">---Choisir utilisateur</option>
      $reqSQL = "SELECT nom FROM user WHERE role = 'visiteur'";
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
<?php

?>