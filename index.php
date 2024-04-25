<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
    <link rel="stylesheet" href="assets/fonts/font.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/media/mediaqueryhm.css">
    <title>Stargazing Moments</title>
</head>
<?php
session_start();
?>



<header>

<div>

  <h1 data-aos="zoom-in">Stargazing Moments.</h1>
  <p id="nd-title">The Stars Aren't That Far</p>

</div>



<div class="login-out-container">

   <a id="log" href="/login">Déja Inscrit ?</a>

   <a id="log" href="/register">S'inscrire</a>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/navbar-home.php';?>

</div>

<?php if (isset($_GET['deleteAccount'])) { ?>
    <p id="messages">Votre compte a bien été supprimé avec succés.</p>
<?php } ?>

</header>



<body>

<blockquote data-aos="fade-right">Here travelers can stargaze, learn the secrets of barbecue, canoe on a 100-acre lake, or unwind with a massage after a horseback ride. <br></br>This Is What Stargazing Moments. Is All About.</blockquote>



<!--Prez SM-->
<section>
<div class="AboutEn"><img data-aos="fade-left" id="BGH1" src="assets/img/home/BGH1.jpg">
  
  <h2 data-aos="fade-right">Qu'est que Stargazing Moments ?</h2> 
  <p data-aos="fade-right" class="txt-bgh"> Stargazing Moments est une agence de booking d’activités, créer en 2013, qui a pour de buts de révolutionner l’approche que nous avons vis à vis de l’utilisation de notre temps libre afin de passer des bons moments seuls ou à plusieurs.</p>
</div>

<br>

<div class="MoreAbout"><img data-aos="fade-right" id="BGH2" src="assets/img/home/BGH2.jpg">
  
  <h2 data-aos="fade-left">Nos Services.</h2> 
  <p data-aos="fade-left" class="txt-bgh">Nous proposons un large panel d’activités diverses et variées, afin de répondre à tout type de clients, en prenons en considération vos âges, vos handicaps, vos préférences ethniques et religieuses. Afin que tout le monde puisse vivre le moment de la meilleure manière possible.</p>
</div>

<br>

<div class="Ac"><img data-aos="fade-left" id="BGH3" src="assets/img/home/BGH3.jpg">
  
  <h2 data-aos="fade-right">Moments.</h2> 
  <p data-aos="fade-right" class="txt-bgh">Nos activités se divisent en 3 parties, des activités d’intérieur pour les plus frileux d’entre vous, qui cherche un environnement calme sans le brouhaha du monde extérieur.

Des activités d’extérieur pour ceux qui ont besoin d’espace, de respirer l’air frais, de sortir de leurs cadre de vie professionnel trop oppressant.

Et pour finir des activités en altitude, pour ceux qui ont besoin de prendre de la hauteur sur le monde et sur leur vie ici-bas.</p>
</div>

<br>

<div class="MNF"><img data-aos="fade-right" id="BGH4" src="assets/img/home/BGH4.jpg">
  
  <h2 data-aos="fade-left">Plus qu'une activité un Moments.</h2> 
  <p data-aos="fade-left" class="txt-bgh">Chez Stargazing Moments, ce n’est pas une simple activité que nous proposons, c’est beaucoup plus que ça, c’est un véritable moment, une expérience de vie inoubliable qui saura vous mettre des étoiles pleins les yeux, car c’est ça le but chez Stargazing Moments vous mettre des étoiles pleins les yeux.</p>
</div>

<p data-aos="zoom-in" class="Closing">Et Tout çela dans le monde entier.</p> 

<div class="WW">
  <h2 data-aos="zoom-in-down" class="Closure">Jusqu'au prochain Moments.</h2>
</div>

</section>
<!--End Of Prez SM-->



<!--Trending Act-->
<section> 
<h2 class="act-title">Activitées. à la une</h2>

<div id="mqActaln" class="grid-container1"> 
<div data-aos="fade-right"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500" id="One" class="grid-item">
<p id="text-content">WorkShop/ Jerry Lorenzo</p>
</div>

<div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500" 
id="Two" class="grid-item">
<p id="text-content">Cooking class/ Alain Ducasse</p>
</div>
</div>


<div id="mqActaln" class="grid-container2">
<div data-aos="fade-right"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500" 
id="Three" class="grid-item">
<p id="text-content">Visité Privé Maranello Ferrari</p>
</div>

<div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500" 
id="Four" class="grid-item">
<p id="text-content">Formula 1 Experiences</p>
</div>

</div>
</section>
<!--End Of Trending Act-->



<!--Avis-->
<section>
<h2 class="avs-title">Derniers. Avis</h2>

<div class="avs-container">

<div class="avs-grid"><h3>Fernando Tatis.JR</h3>
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur architecto deleniti veritatis commodi!
  <img id="avs-ic" src="assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>

<div class="avs-grid"><h3>Ronald Acuna.JR</h3>
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum quas quidem sapiente iste dicta dolorum.
  <img id="avs-ic" src="assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>

<div class="avs-grid"><h3>Juan Soto</h3>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates consequuntur, sequi iusto repellendus!
  <img id="avs-ic" src="assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>

</div>
</section>
<!--End Of Avis-->



<div class="BGF">
  <blockquote>Stargazing Moments. is a company describing the experience of an unpredictable psychedelic trip. </blockquote>
</div>



<div class="footer-line"></div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init();</script>

<script src="assets/js/ajax/script-menu.js"></script>


<?php
require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/footer.php';?>

</body>
</html>