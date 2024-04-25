<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/partner.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">    
    <link rel="stylesheet" href="/assets/media/mediaquerypartners.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Partenaires</title>
</head>



<header>

<div>

  <h1 data-aos="zoom-out">Partenaires.</h1>
  <p id="nd-title">The Stars Aren't That Far</p>

</div>



<div class="login-out-container">

   <a id="log" href="/login">Déja Inscrit ?</a>

   <a id="log" href="/register">S'inscrire</a>

</div>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/navbar.php';?>


</header>



<body>



<!--Partner-->
<section>
<div data-aos="fade-up" data-aos-anchor-placement="center-center" class="partners-container1">


<div class="partners1">

   <div id="item">
      <img id="img-partners" src="/assets/img/partners/FOG.png" alt="Fear Of God" height="200" width="250">
      <h4>Fear Of God, depuis 2018</h4>    
   </div>


   <div id="item">
      <img id="img-partners" src="/assets/img/partners/ADB.png" alt="Alain Ducasse" height="200" width="250">
      <h4>Alain Ducasse, depuis 2020</h4>
   </div>


   <div class="SF" id="item">
      <img id="img-partners" src="/assets/img/partners/SF.jpg" alt="Scudderia Ferrari" height="200" width="250">
      <h4>Scuderia Ferrari, depuis 2016</h4>
   </div>


</div>


<div data-aos="fade-up" data-aos-anchor-placement="center-center" class="partners2">

   <div id="item">
      <img id="img-partners" src="/assets/img/partners/MFKL.png" alt="Maison Francis Kurkdjian" height="200" width="250">
      <h4>Maison Francis Kurkdjian, depuis 2021</h4>    
   </div>


   <div id="item">
      <img id="img-partners" src="/assets/img/partners/CJTS.png" alt="Cactus Jack" height="200" width="250">
      <h4>Cactus Jack, depuis 2015</h4>
   </div>

   <div id="Dojo">
      <p id="img-partners">土所 で 長町</p>
      <h4>Dojo Nagamachi, depuis 2022</h4>
   </div>


</div>
</div>

<br>

<div data-aos="fade-up" data-aos-anchor-placement="center-center" class="partners-container2">


<div class="partners3">
   
   <div id="item">
      <img id="img-partners" src="/assets/img/partners/FBG.jpg" alt="FreeBandz" height="200" width="220">
      <h4>FreeBandz, depuis 2017</h4>    
   </div>


   <div id="item">
      <img id="img-partners" src="/assets/img/partners/IPLF.png" alt="Institut Polaire FR" height="200" width="240">
      <h4>Institut Polaire Francais, depuis 2021</h4>
   </div>


   <div id="item">
      <img src="/assets/img/partners/F1.png" alt="Formula 1" height="200" width="220">
      <h4>Formula 1, depuis 2021</h4>
   </div>


</div>


<div data-aos="fade-up" data-aos-anchor-placement="center-center" class="partners4">

   <div id="item">
     <img src="/assets/img/partners/AUSTINR.png" alt="Austin Ranch" height="200" width="220">
     <h4>Austin Ranch, depuis 2014</h4>    
   </div>


   <div id="item">
      <img src="/assets/img/partners/NAPAV.png" alt="Nappa Valley" height="200" width="220">
      <h4>Napa Valley Tourisme, depuis 2021</h4>
   </div>


   <div id="item">
      <img src="/assets/img/partners/SPACEX.jpg" alt="SpaceX" height="200" width="240">
      <h4>Space X, depuis 2020</h4>
   </div>

</div>
</div>

</section>
<!--End Of Partner-->



<div class="footer-line"></div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init();</script>

<script src="/assets/js/ajax/script-menu.js"></script>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/footer.php';?>
</body>
</html>