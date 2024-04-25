<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/contact.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">
    <link rel="stylesheet" href="/assets/media/mediaquerycont.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Stargazing Moments</title>
</head>



<header> 

<div>

  <h1 data-aos="zoom-in-right">Contactez nous !</h1>
  <p id="nd-title">The Stars Aren't That Far</p>

</div>



<div class="login-out-container">

   <a id="log" href="/login">Déja Inscrit ?</a>

   <a id="log" href="/register">S'inscrire</a>

</div>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/navbar.php';?>


<div class="arrow">
<a href="#Ct">  
<img src="/assets/img/icons/arrow-down-339-svgrepo-com.svg" height="50" width="50">
</a>  
</div>
</header>



<body>



<blockquote id="Ct">Because stargazing is best done from a dark place away from city lights, dark adaptation is important to achieve and maintain.</blockquote>


<br>


<!--Contact Form-->
<div class="btn"> 
   
<a href="tel:+33 1 23 45 67 89"> <i id="phn-icon" class="fa-solid fa-phone"></i>
<button class="phn"> + 33 1 23 45 67 89</button> 
</a>

<a href="mailto:stargazing.momemnts@gamil.com"> <i id="mail-icon" class="fa-solid fa-envelope"></i>
<button class="email"> stargazing.moments@gmail.com</button> 
</a>

</div>

<div class="fm"> 
<form>


    <div  class="input-group">    
       <label for="first-name">Nom</label>
       <input type="text" id="first-name" placeholder="Sakai" required>
   </div>


    <div class="input-group">
      <label for="last-name">Prénom</label>
      <input type="text" id="last-name" placeholder="Jin" required>
   </div>


    <div class="input-group">
      <label for="mail">Adresse mail</label>
      <input type="email" id="mail" placeholder="example@gmail.com" required>
   </div>


   <div class="input-group">
      <label for="subject">Sujet</label>
      <input type="text" id="subject" required>
   </div>


   <div class="input-group">
       <label for="message">Votre message</label>
       <textarea for="message" rows="8"></textarea>
   </div>

<button class="sub" type="button" id="submit">Envoyer</button>

</form>
</div> 
<!--End Of Contact Form-->



<div class="footer-line"></div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init();</script>

<script src="/assets/js/ajax/script-menu.js"></script>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/footer.php';?>
</body>
</html>
