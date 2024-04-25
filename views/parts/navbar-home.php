<nav id="nav">

<a id="home-lnk" href="index.php"> 
<p class="logo">SM.</p>
</a>
    

<ul id="ul">
  
   <li id="li"><a class="mn" href="views/activities.php"><i id="mni" class="fa-regular fa-star"></i>Moments</a></li>
   <li id="li"><a class="mn" href="views/ourcommitment.php"><i id="mni" class="fa-solid fa-list-check"></i>Nos Engagements</a></li>
   <li id="li"><a class="mn" href="views/contact.php"><i id="mni" class="fa-regular fa-address-card"></i>Contact</a></li>

<?php if (!empty($_SESSION['user'])) { ?>

   <?php if ($_SESSION['user']['id_users_roles'] == 1) { ?>
        
        <li id="li"> <a class="mn" href="/account" title="my-account"> <i id="mni" class="fa-solid fa-user"></i>Mon Compte</a></li>
   
  <?php } ?>
        
        <li id="li"> <a class="mn" href="/logout" title="logout"> <i id="mni" class="fa-solid fa-person-walking-arrow-right"></i>Se Déconnecter</a></li>

<?php } ?>

</ul>


<div id="icons"></div> 
</nav>