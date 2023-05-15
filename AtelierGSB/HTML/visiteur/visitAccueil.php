<!DOCTYPE html>
<!-- langue de la page -->
<html lang="fr">


<!--Paramétrage de l'ongle de page et du lien avec le css-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GSB</title>
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="../../CSS/index.css">
</head>

<body>
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


  <!--Milieu de page-->
  <header>
    <section class="first">
      <div class="study">
        <h1>GSB</h1>
        <!--Bouton centrale "En savoir plus"-->
        <a href="HTML/connexion.html"><button> EN SAVOIR PLUS</button></a>
      </div>
      <div class="carre"> </div>
      <p>
        Bienvenue chers visiteurs médicaux,

        Nous sommes ravis de vous accueillir sur le site de notre laboratoire médical. En tant que visiteurs médicaux, vous êtes des professionnels de la santé qui jouent un rôle important dans la promotion et la vente de nos produits et services.

        Nous sommes fiers de fournir des produits de qualité supérieure et des services de pointe pour soutenir la santé et le bien-être de nos patients. Nous sommes également engagés à travailler avec vous pour vous aider à mieux comprendre nos produits et services, ainsi que leur impact sur les patients que vous servez.

        Nous sommes là pour vous aider dans votre travail et pour vous fournir les informations dont vous avez besoin pour offrir à vos clients les meilleurs produits et services possibles. Nous sommes impatients de travailler avec vous et de développer une relation de confiance et de collaboration qui bénéficiera à tous.

        N'hésitez pas à explorer notre site pour en apprendre davantage sur notre laboratoire et sur les services que nous offrons, et à nous contacter si vous avez des questions ou des préoccupations.
      </p>

      <img src="images/tt.jpg" alt="img d'acceuil" style="width:800px;height:450px;">

    </section>

  </header>

  <!-- Pied de page -->
  <footer>
    <!-- Premiere colonne du pied de page -->
    <div class="premiere">
      <img src="images/logo.png" alt="logo en pied de page">
      <p>Gsb est un outil regroupant des informations sur <br>différentes entreprises.<br> <br>Merci de
        bien vouloir l'utiliser avec précaution.</p>
    </div>

    <!-- Deuxieme colonne du pied de page -->
    <div class="deuxieme">
      <h1>Nous suivre</h1>
      <!-- Lister les élements(avec la balise <li></li>) en dessous de la deuxime colonne du pied de page avec des redirections à l'aide de la balise <a href=""> ...-->

      <li> <a href="blog.html">Blog </a> </li><br>

      <li> <a href="avis.html"> Avis</a> </li>

      <div class="reseaux">
        <a href="https://www.facebook.com/aideauxdevoirs.ac/"><img src="images/face.png" alt="facebook"
            style="width: 50px; height: 40px;"> </a>
        <div class="insta">
          <a href="https://www.instagram.com/aideodevoirs26/?hl=fr"><img src="images/insta.png" alt="insta"
              style="width: 50px; height: 40px;"> </a>
        </div>
        <div class="wathapp">
          <a href="https://www.whatsapp.com/coronavirus/educator/?lang=fr"><img src="images/wathapp.png"
              alt="wathapp img" style="width: 50px; height: 40px;"> </a>
        </div>

      </div>
    </div>
    <!-- Troisième colonne du pied de page -->

    <div class="troisieme">
      <h1>Nos Contacts</h1>
      <p>04-12-25-28-73</p>
      <p>support-gsb@gsb.com</p>
      <p>15 allée Jean Jaures, Tou CEDEX 2</p>
    </div>


    <!-- Quatrième colonne du pied de page avec des redirections des logos vers l'application sur Android et Ios -->
    <div class="quatrieme">
      <h1>Nous rejoindre</h1>
      <p>Disponible sur play store et app store :</p>

      <!--Logo pour Play Store -->
      <div class="pstore">
        <a href="https://play.google.com/store/apps/details?id=com.greenfieldsavingsbank.biz&hl=fr&gl=US">
          <img src="images/pstore.png" alt="play store" style="width: 125px; height: 50px;">
        </a>
      </div>
      <!--Logo pour Apple Store -->
      <div class="astore">
        <a href="https://apps.apple.com/fr/app/nosdevoirs-aide-aux-devoirs/id745089947">
          <img src="images/astore.png" alt="apple store" style="width: 125px; height: 60px;">
        </a>
      </div>
    </div>


  </footer>
</body>

</html>