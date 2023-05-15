<!-- langue de la page -->
<script type="text/javascript">
  function verifChampsLogin(){
    //test si l'un des 2 champs est vide
    if(document.getElementById('login').values == '')
    ||(document.getElementById('mdp').values == '')
    {
        alert("Remplir tous les champs !");  
        return false;
    }
    return true;
  }
</script>


<!--Paramétrage de l'ongle de page et du lien avec le css-->
<html>

<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="icon" type="image/png" href="/images/logo.png">
  <link rel="stylesheet" href="../CSS/connexion.css" media="screen" type="text/css">
</head>


  <body>
      <!--Entete en haut de page avec tout les élements-->
  <nav>
    <div class="top">

      <a href="/index.html">
        <img src="/images/logo.png" alt="GSB" sizes="50*50">

      </a>
    </div>
    <div class="onglet">
      <p><input type="text" id="Prénom" name="Prénom" placeholder="Rechercher 🔎"></p>
    </div>
  </nav>
    <!--Entete en haut de page avec tout les élements-->
    <div class="center">
      <!-- titre de connexion -->
      <h1 style="font-weight: 10px;">Connexion</h1>
      <form method="post" action="../includes/connexionVerif.php" onsubmit='return verifChampsLogin()'>
        <!-- bouton adresse e-mail -->
        <label style="color:#5C5D61;">Identifiants</label>
        <div class="champ_texte">
          <input class="email" type="texte" name="login" required>
        </div>
        <br>
        <!-- bouton mot de passe  -->
        <label style="color:#5C5D61;">Mot de passe</label>
        <div class="champ_texte">
          <input class="mdp" type="password" name="mdpasse" required>
        </div>
        <br>
        <div class="pass" style="color:#5C5D61;">
          <u>Adresse e-mail oublié ?</u> | <u>Mot de passe oublié ? </u>
        </div>
        <br>
        <!-- bouton connexion -->
        <input class="login" type="submit" value="Connexion"></input>
        <input class="login" type="reset" value="Annuler">
      </form>
      <br><br>
      <details>
        <summary>Détails supplémentaire</summary>
        <br>
        <!-- Pied de page de la connexion -->
        <div class="details">
          <p> Si votre compte est associée à une adresse <br> e-mail à laquelle vous n'avez
            plus accès, veuillez vous connecter à votre compte et mettre à jour votre adresse e-mail dans les paramètres
            de votre compte. Si vous rencontrez des difficultés pour vous connecter, veuillez consulter notre <u>page
              d'assistance.</u>
          </p>
        </div>
      </details>
    </div>
  </body>
</html>

