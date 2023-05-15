<script>
  html {
  height: 100%;
  width: 100%;
}
/* début configuration de la page principale sur les caracteres les marges couleurs... */
body {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    color: rgb(0, 0, 0);
}
#img {
	position: absolute;	
	width:100%;
	}

/* Configuration du haut de page */
body a {
    text-decoration: none;
}
nav {
    display: flex;
    background-color: #011c39;
    justify-content: space-between;
}
.onglet p {
  text-align : center;
}
nav .top {
    display: flex;
}
nav .top h1{
    color: #ffffff;
    padding-left: 5px;
    padding-top: 15px;
}
nav .top img {
    width: 7%;
    margin-left: 30px;
    margin-top: 10px;
    padding-bottom: 10px;
}
nav .onglet {
    display: flex;
    align-items: center;
    margin-right: 100px;
}
nav .onglet p {
    color: #ffffff;
    margin-right: 40px;
    cursor: pointer;
}
nav .onglet p:hover {
    color: #0a8bdb;
}

/* Configuration du pied de page */
a
{
text-decoration: none;
color: inherit;
}
footer {
    background-color: #011c39;
    padding: 25px 100px;
    display: flex;
    color: white;
    margin-top: 150px;
    font-size: 12px;
}
footer .premiere{
    color: rgb(211, 211, 211);
  
}
footer .premiere img {
    width: 10%;
}
footer .deuxieme {
    margin-right: 200px;
}
footer .deuxieme p {
    cursor: pointer;
    transition: color 0.6s;
    color: rgb(211, 211, 211);
}
footer .deuxieme p:hover{
    color: rgb(255, 255, 255);
    
}
footer .troisieme p{
    color: rgb(211, 211, 211);
    margin-right: 200px;
}
footer .quatrieme p{
    color: rgb(211, 211, 211);
    white-space: nowrap;
    
}
.insta {
  margin-top: -43px;
  margin-left: 55px;
}
.wathapp {
  margin-top: -44px;
  margin-left: 112px;
}
.reseaux{
margin-top: 15px;
filter: invert(0.9);
}

/* début de la configuration de la page centrale*/
header .first{
    padding: 50px 5%;
    margin-top: 2%;
    display: flex;
    justify-content: space-between
}

.carre {
    position: absolute;
    width:750px;
	  height:550px;
	  background:#011c39;
    margin-left: 1000px;
    margin-top: -30px;
}
header .first img {
    width: 60%;
    padding-left: 50px;
    z-index: 2
}
.first .study {
    padding-left: 80px;
    padding-top: 80px
}
.first .study h1 {
    font-size: 50px;
    color: #011c39;
    margin-bottom: 20px;
}
.first .study p {
    color: rgb(131, 131, 131);
    font-weight: 400;
}

.first .study button {
   padding: 13px 40px;
   background-color: #011c39;
   font-weight: 400;
   color: white;
   margin-top: 20px;
   cursor: pointer;
   border: 2px solid #011c39;
   transition: color 0.8s, background-color 0.8s;
}
.first .study button:hover {
    background-color: inherit;
    color: #0a8bdb;
}
a {
  text-decoration: none;
}


/*pour rendre certain élément responsive*/
@media screen and (max-width: 1024px) {
                    
	.content-footer {
		max-width: 100%;
		flex-wrap: wrap;
	}
	.bloc {
		flex-basis: auto;
		margin: 20px 20px;
	}
  
}
</script>
<!-- langue de la page -->
<html lang="fr">


<!--Paramétrage de l'ongle de page et du lien avec le css-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GSB</title>
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="../../CSS/index.css" media="screen" type="text/css">
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
      <a href="formValidFrais.php">
        <p>Validation de Frais</p>
      </a>
      <a href="SuivrePaimentFrais.php">
        <p>Suivre mes paiment de Frais</p>
      </a>
      <p><input type="text" id="Prénom" name="Prenom" placeholder="Rechercher 🔎" required></p>
    </div>
  </nav>


  <!--Milieu de page-->
  <header>
    <section class="first">
      <div class="study">
        <h1>GSB</h1>
        <p>Bienvenue chers comptables médicaux,

           Nous sommes ravis de vous accueillir sur le site de notre laboratoire médical. Nous savons que votre travail est essentiel pour assurer la bonne gestion de nos finances et nous permettre de fournir des services médicaux de qualité à nos patients.

           En tant que comptables médicaux, vous êtes responsables de la gestion des finances, des factures et des paiements des patients, ainsi que du respect des budgets et de la production de rapports financiers précis. Nous reconnaissons l'importance cruciale de votre travail dans la réussite de notre laboratoire et nous sommes déterminés à vous fournir tout le soutien et les ressources dont vous avez besoin pour vous aider à exceller dans votre rôle.

           Nous sommes impatients de travailler avec vous et de vous aider à atteindre vos objectifs. N'hésitez pas à explorer notre site pour en apprendre davantage sur notre laboratoire et sur les services que nous offrons, et à nous contacter si vous avez des questions ou des préoccupations.

           Encore une fois, merci d'avoir choisi de travailler avec nous en tant que comptables médicaux. Nous sommes convaincus que nous pouvons accomplir de grandes choses ensemble.
        </p>
        <!--Bouton centrale "En savoir plus"-->
        <a href="HTML/connexion.html"><button> EN SAVOIR PLUS</button></a>
      </div>
      <div class="carre"> </div>

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