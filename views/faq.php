<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/faq.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">    
    <link rel="stylesheet" href="/assets/media/mediaqueryfaq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>FAQ</title>
</head>



<header>

<div>
 
  <h1 data-aos="zoom-out-up">FAQ.</h1>
  <p id="nd-title">The Stars Aren't That Far</p>

</div>


<div class="login-out-container">

   <a id="log" href="/login">Déja Inscrit ?</a>

   <a id="log" href="/register">S'inscrire</a>

</div>

<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/navbar.php';?>



</header>



<body>



<!--FAQ-->
<section>
<div class="container">

<div data-aos="fade-up" id="grid">
<img id="iconsF" src="/assets/img/faq/schedule-calendar-time-svgrepo-com.svg" height="50" width="50">  
<h2>Comment planifiez-vous, vos activités ? </h2>
<p class="item">Les dates et horaires des activités sont fixés en fonction des disponibilités, du nombre de place restante et ou des conditions météorologiques.</p>
</div>

<div data-aos="fade-up" id="grid">
<img id="iconsF" src="/assets/img/faq/cancel-event-interface-symbol-of-a-calendar-with-a-cross-button-svgrepo-com.svg" height="50" width="50">    
<h2>Comment cela se passe en cas d’annulation de la réservation ?</h2>
<p class="item">Si vous souhaitez annuler une réservation, pour bénéficier du remboursement cela devra se faire 48h à l’avance, de la date et de l’heure à laquelle la réservation a été effectuée.
Si l’annulation de la réservation provient de Stargazing Moments, nous informerons des raisons et si un remboursement est possible, selon les conditions d’annulation.</p>
</div>

<div data-aos="fade-up" id="grid">
<img id="iconsF" src="/assets/img/faq/changing-schedule-repeat-child-svgrepo-com.svg" height="50" width="50">    
<h2>Je souhaite changer de créneau horaire et de date pour mon activité ?</h2>
<p class="item">Pour le changement de créneau horaire, il faudra nous le notifier 24h à l’avance, via la rubrique contact, ou par mail ou téléphone directement, ainsi, nous prendrons en compte votre changement de créneau horaire et le changement de date à nos partenaires d’activités.</p>
</div>


<div data-aos="fade-up" id="grid">
<img id="iconsF" src="/assets/img/faq/wheelchair-svgrepo-com.svg" height="50" width="50">    
<h2>En cas de handicap, pouvons-nous toutefois réserver ?</h2>
<p class="item">Nous ne faisons aucune distinction entre une personne complètement mobile et une personne portante d’un handicap. Vous pouvez bien évidemment réserver l’activité de votre choix, ainsi nous et nos partenaires, nous adapterons l’activité selon vos handicaps, pour que vous puissiez profiter du moment comme une personne lambda.</p>
</div>


<div data-aos="fade-up" id="grid">
<img id="iconsF" src="/assets/img/faq/no-photo-svgrepo-com.svg" height="50" width="50">    
<h2>Si nous voulions ne pas figurer sur les photos de souvenirs des activités sur votre site ?</h2>
<p class="item">Une autorisation de droit à l’image vous sera envoyée afin que vous puissiez cocher oui ou non, à ce que l’on diffuse des photos de vous sur notre site.</p>
</div>


<div data-aos="fade-up" id="grid">
<img id="iconsF" src="/assets/img/faq/group-of-men-svgrepo-com.svg" height="50" width="50">    
<h2>Pouvons-nous réserver l’exclusivité d’un créneau pour un groupe d’amis ?</h2>
<p class="item">Il est bien évidemment possible de réserver un créneau pour vous et vos amis, cependant, il s’agit d’une demande spéciale, il faudra donc nous contacter directement par téléphones pour vous transmettre toutes les modalités de réservation.</p>
</div>


</div>
</section>
<!--End Of FAQ-->



<div class="footer-line"></div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init(); </script>

<script src="/assets/js/ajax/script-menu.js"></script>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/footer.php';?>
</body>
</html>