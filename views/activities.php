<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/activities.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">
    <link rel="stylesheet" href="/assets/media/mediaqueryact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <a href="https://icons8.com/icon/62033/planète-mars"></a><a href="https://icons8.com"></a>
    <title>Activités</title>
</head>



<header>


<div>    
    
  <h1 data-aos="zoom-in-up">Activités.</h1>
  <p id="nd-title">The Stars Aren't That Far</p>

</div>



<div class="login-out-container">

   <a id="log" href="/login">Déja Inscrit ?</a>

   <a id="log" href="/register">S'inscrire</a>

</div>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/navbar.php';?>


</header>



<body>


<blockquote>As the island is well outside the light cone of coastal cities, the stargazing is spectacular, with nightly meteor showers not uncommon.</blockquote>



<!--Filter-->
<div class="fil-container">


<div id="categories-tag"> 

     <button id="IndoorAcc" class="butn">Activitées. en Intérieur</button>
     <button id="OutdoorAcc" class="butn">Activitées. en Extérieur</button>
     <button id="HighSkyAcc" class="butn">Activitées. en Altitude</button>
     <button id="Clear" class="butn">Sans filtre</button>

</div>


<div id="price-tag"> 

     <button class="butn">Plus petit au plus grand : croissant</button>
     <button class="butn">Plus grand au plus petit : décroissant</button>

</div>


</div>
<!--End Of Filter Zone-->



<main id="listActivities">



<!--Activities-->
<!--Act Int-->
<section><h2 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Activitées. en Intérieur</h2>

<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="product-container1">

  
<!--1st Card of AI-->
<div class="cards" id="IndoorAcc" >
<div class="content">

<div id="one"></div>

<div class="review">

     <span>Avis (5.6/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
     <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-americas"></i>Los Angeles, California</p>

</div>

<h5>545 € / Personne</h5>

</div>


<h4 class="product-name">WorkShop W/ Jerry Lorenzo</h4>

<div class="description">
      <p class="text-description">Pendant 2h en compagnie de Jerry Lorenzo, créateur de mode avant-gardiste, en avance sur son temps, vous allez créer une collection complète sur la base de ses anciennes créations afin de les dévoiler à son prochain défilé, à Hollywood Bowl.</p>
</div>


<div class="button-container">  
  <div class="Cart">

      <button id="cart-button" class="add-to-cart-btn"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>

  </div> 


<div id="date-hours">

<input type="date" name="Date" id="d-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   
</div>

</div>



<!--Nd Card of AI-->
<div class="cards">
<div class="content">
  
<div id="two"></div>
  
<div class="review">

   <span>Avis (5.2/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-europe"></i>Paris, France</p>

</div>
  
<h5>250 € / Personne</h5>
  
</div>
  
  
<h4 class="product-name">WorkShop W/ Alain Ducasse</h4>
  
<div class="description">
    <p class="text-description">Alain Ducasse, 20 étoiles au guide Michelin, il y aurai bien au moins 20 bonnes raisons de vous convaincre du talent d'Alain Ducasse. Participer à un atelier avec le chef afin de participer à la création des plats de sa nouvelle carte.</p>
</div>
  

<div class="button-container">  
  <div class="Cart">
          
      <button id="cart-button" class="add-to-cart-btn"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
     
  </div>


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>  
</div>
  


<!--3rd Card of AI-->
<div class="cards">
<div class="content">
  
<div id="three"></div>
  
<div class="review">
    
    <span>Avis (5.7/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-europe"></i>Maranello, Italie</p>

</div>
  
<h5>300 € / Personne</h5>
  
</div>
  
  
<h4 class="product-name">Visite privé à Maranello Ferrari</h4>
  
<div class="description">
      <p class="text-description">Quand nous entendons de Ferrari, nous pensons instinctivement au cheval cabré, et à un homme, Enzo Ferrari. Découvrez l’histoire de Ferrari et de la Scuderia Ferrari, lors d’une visite privé dans à Maranello en Italie, le fief de Ferrari.</p>
</div>


<div class="button-container">  
<div class="Cart">
  
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>  

</div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>
</div>



<!--End of product-container1-->
</div>



<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" id="IndoorAcc" class="product-container2"> 


<!--4th Card of AI-->
<div class="cards">
<div class="content">
  
<div id="four"></div>
  
<div class="review">

    <span>Avis (4.9/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-europe"></i>Paris, France</p>

</div>
  
<h5>400 € / Personne</h5>
  
</div>
  
  
<h4 class="product-name">WorkShop W/ Francis Kurkdjian</h4>
  
<div class="description">
      <p class="text-description">Francis Kurkdjian, ça ne vous dit surement rien, il est celui qui se cache derrière les plus grands parfums du monde, parfumeur de renom, il a travaillé pour les plus grandes enseignes. Créer votre propre parfum en participant à son atelier.</p>
</div>
  


<div class="button-container">  
  <div class="Cart">
  
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
  
  </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>  
</div>
  


<!--5th Card of AI-->
<div class="cards">
<div class="content">
  
<div id="five"></div>
  
<div class="review">

    <span>Avis (5.6/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-asia"></i>Nagamachi, Japon</p>

</div>

<h5>180 € / Personne</h5>
  
</div>
  
  
<h4 class="product-name">Initiation au Samourai</h4>
  
<div class="description">
      <p class="text-description">Retrouvez l’héritage des Samouraïs de l'époque dans la province de Nagamachi, au Japon, prenez part à une initiation immersive aux préceptes des samouraïs, à leurs techniques de combat et de survie dans leur Dojo originel. Apprenez à manier le Katana en compagnie d'ancien Samouraïs.</p>
</div>
  
  
<div class="button-container">  
  <div class="Cart">
  
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
  
  </div>


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>  
</div>    


  
<!--6th Card of AI-->
<div class="cards">
<div class="content">
  
<div id="six"></div>
  
<div class="review">

    <span>Avis (6/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-americas"></i>Atlanta, Géorgie</p>

</div>
  
<h5>2500 € / Personne</h5>
  
</div>
  
  
<h4 class="product-name">Studio W/ Travis Scott, Future</h4>
  
<div class="description">
      <p class="text-description">Travis Scott & Future, véritable icône et légende de la musique urbaine et de la culture Hip-hop aux Etats-Unis, et dans le monde entier, assister et participer à une session studio avec ces 2 artistes préparant leur prochain album commun, dans la ville d'Atlanta berceau de la Trap Music.</p>
</div>
  
  
<div class="button-container">  
  <div class="Cart">
  
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
  
  </div> 

  
<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>
</div>
  


<!--End of product-container2-->
</div>
<!--End of Act Int-->
</section>



<!--Avis Int-->
<section>
<h2 class="avs-title">Derniers. Avis. Activitées en Intérieur</h2>
    
<div class="avs-container">


<div class="avs-grid"><h3 class="avs-people">Mike Trout</h3>

      <p class="avs-grid-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Consectetur architecto deleniti veritatis commodi!</p>  
      <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
    

<div class="avs-grid"><h3 class="avs-people">Anthony Rendon</h3>
       
      <p class="avs-grid-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum quas quidem sapiente iste dicta dolorum.</p>
      <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
    

<div class="avs-grid"><h3 class="avs-people">Max Scherzer</h3>

      <p class="avs-grid-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates consequuntur, sequi iusto repellendus!</p>
      <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
    
</div>
</section>



<!--Act Ext-->
<section id="Outdoor"> <h2 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Activitées. en Extérieur</h2>

<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="product-container3">


<!--7th Card of AE-->
<div class="cards">
<div class="content">
    
<div id="seven"></div>
    
<div class="review">

    <span>Avis (5/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-mountain"></i>Antarctique</p>

</div>
    
<h5>1500 € / Personne</h5>
    
</div>
    
    
<h4 class="product-name">Camping en Antarctique</h4>
    
<div class="description">
      <p class="text-description">Découvrez l’Antarctique comme vous ne l’aviez jamais vu auparavant. Passez une semaine à vivre comme des inuits, chassez du poisson frais, faite face au froid glacial, vous serez guidé et diriger par un expert des lieus vous transmettant des techniques de survie dans le grand froid.</p>
</div>
    
    
<div class="button-container">  
  <div class="Cart">
    
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
    
  </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>
</div>
    
    
    
<!--8th Card of AE-->
<div class="cards">
<div class="content">
      
<div id="eight" class="img"></div>
      
<div class="review">

    <span>Avis (4.3/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-mountain"></i>Everest, Asie</p>

</div>
      
<h5>60 000 € / Personne</h5>
      
</div>
      
      
<h4 class="product-name">Ascension Everest</h4>
      
<div class="description">
    <p class="text-description">Pour les plus téméraires et courageux d’entre vous, affrontez la montagne la plus connue au monde. Gravissez la montagne de l’Everest avec notre légendaire guide népalais Lakpa Gelu Sherpa, détenteur du record du monde, du plus rapide à avoir gravi l’Everest.</p>
</div>
      
      
<div class="button-container">  
  <div class="Cart">
    
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
    
  </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>
</div>
      
    
    
<!--9th Card of AE-->
<div class="cards">
<div class="content">
      
<div id="nine" class="img"></div>
      
<div class="review">

    <span>Avis (5.8/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-europe"></i>Silverstone, Angleterre</p>

</div>
      
<h5>2000 € / Personne</h5>
      
</div>
      
      
<h4 class="product-name">Formula 1 Experiences</h4>
      
<div class="description">
      <p class="text-description">Vivez la Formule 1 au plus prés, baladez-vous dans chaque paddock, de chaque écurie, échangez avec les ingénieurs et mécaniciens des écuries. Profitez de la course en live depuis les stand et vivez au plus prés les passages au stand dans de l’écurie de votre choix.</p>
</div>
      
      
<div class="button-container">  
  <div class="Cart">
  
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>  
    
  </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>      
</div>
    
    
    
<!--End of product-container3-->    
</div>
 
  

<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="product-container4">


<!--10th Card of AE-->
<div class="cards">
<div class="content">
      
<div id="ten"></div>
      
<div class="review">

    <span>Avis (3.7/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-map-location-dot"></i>Inconnu</p>
    
</div>
      
<h5>13 000 € / Personne</h5>
      
</div>
      
      
<h4 class="product-name">Survivre sur une Île Déserte</h4>
      
<div class="description">
    <p class="text-description">Pour les férus d’expériences de survie dans des conditions extrêmes, ce Moments est fait pour vous. Vous devez survivre une semaine sur une Île déserte inconnu du monde entier, sans aides au préalable, avec une valise complète de survie à disposition.</p>
</div>
      
      
<div class="button-container">  
  <div class="Cart">
      
    <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
      
  </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>      
</div>
      
      
      
<!--11th Card of AE-->
<div class="cards">
<div class="content">
        
<div id="eleven" class="img"></div>
        
<div class="review">

    <span>Avis (5.5/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-americas"></i>Austin, Texas</p>

</div>
        
<h5>1300 € / Personne</h5>
        
</div>
        
        
<h4 class="product-name">Ranch Experiences</h4>
        
<div class="description">
   <p class="text-description">Occupez-vous d’un ranch typique Américain comme à l’époque des Western, chevaux de trait, bétails, enclos, poulaillers, vous serez occupés avec ces animaux pendant 1 semaine, à produire une récolte de denrées et à prendre soin des lieus en plein désert Américain.</p>
</div>
        
        
<div class="button-container">  
  <div class="Cart">
      
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
      
  </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>
</div>
        
      
      
<!--12th Card of AE-->
<div class="cards">
<div class="content">
        
<div id="twelve" class="img"></div>
        
<div class="review">

    <span>Avis (4.9/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-americas"></i>Honolulu, Hawai</p>

</div>
        
<h5>2000 € / Personne</h5>
        
</div>
        
        
<h4 class="product-name">Nagé avec les Requins Blancs</h4>
        
<div class="description">
    <p class="text-description">Les dents de la mer, mais sans les effets spéciaux, mais avec les vrais grands requins blancs du pacifique. Avec votre tuba et vos palmes, nagez au plus près d’eux dans leur habitat naturelle en compagnie de nos nageurs expérimentés des grands requins blancs.</p>
</div>
        
        
<div class="button-container">  
  <div class="Cart">
    
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>  
      
  </div>


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>        
</div>
      
      
<!--End of product-container4-->
</div>
<!--End of Act Ext-->
</section>



<!--Avis Ext-->
<section>
<h2 class="avs-title">Derniers. Avis. Activitées en Extérieurs</h2>
    
<div class="avs-container">
    

<div class="avs-grid"><h3 class="avs-people">Shohei Othani</h3>

      <p class="avs-grid-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur architecto deleniti veritatis commodi!</p>
      <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>


<div class="avs-grid"><h3 class="avs-people">Yoshinobu Yamamoto</h3>
      
      <p class="avs-grid-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum quas quidem sapiente iste dicta dolorum.</p>
      <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
    

<div class="avs-grid"><h3 class="avs-people">Corey Seager</h3>
      
      <p class="avs-grid-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates consequuntur, sequi iusto repellendus!</p>
      <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
    
</div>
</section>



<!--Act Alt-->
<section><h2 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Activitées. en Altitude</h2>

<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="product-container5">


<!--13th Card of AA-->
<div class="cards">
<div class="content">
        
<div id="thirtteen"></div>
        
<div class="review">

    <span>Avis (4.9/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-americas"></i>Abu Dhabi, EAU</p>   

</div>
        
<h5>350 € / Personne</h5>
        
</div>
        
        
<h4 class="product-name">HighSky Diner</h4>
        
<div class="description">
      <p class="text-description">Vous avez toujours rêvé de toucher les étoiles, en dégustant les meilleurs sushis du monde ? Côtoyer les plus grands et beaux Gratte-ciel de Dubaï, avec Nobu Matsuhisa cuisinant pour vous.</p>
</div>
        
      
<div class="button-container">  
    <div class="Cart">
        
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
        
    </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>        
</div>
        
        
        
<!--14 Card of AA-->
<div class="cards">
<div class="content">
          
<div id="fourteen"></div>
          
<div class="review">

    <span>Avis (4/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-europe"></i>Aveyron, France</p>
   
</div>
          
<h5>130 € / Personne</h5>
          
</div>
          
          
<h4 class="product-name">Saut à L'Élastique</h4>
          
<div class="description">
    <p class="text-description">Sauter dans le vide la tête à l’envers au bord du Viaduc de Millau à plus de 270 mètres de hauteur, dépassant les 100Km/h de vitesse, tout cela secoué par une adrénaline débordante.</p>
</div>
          
          
<div class="button-container">  
    <div class="Cart">
        
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
        
    </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>
<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>          
</div>
          
        
        
<!--15th Card of AA-->
<div class="cards">
<div class="content">
          
<div id="fifteen" class="img"></div>
          
<div class="review">

    <span>Avis (6/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-americas"></i>Napa Valley, California</p>

</div>
          
<h5>230 € / Personne</h5>
          
</div>
          
          
<h4 class="product-name">Tour en Montgolfière</h4>
          
<div class="description">
      <p class="text-description">Traversez les nuages à bord d’une montgolfière dernier cri, appréciez le ballet des montgolfières, le soleil couchant, les domaines viticoles de la region, au bord des montagnes de la région de Nappa Valley.</p>
</div>
          
          
<div class="button-container">  
    <div class="Cart">
      
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>  
        
    </div> 


<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>
</div>
        
        
<!--End of product-container5-->        
</div>
 


<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="product-container6">


<!--16th Card of AA-->
<div class="cards">
<div class="content">
      
<div id="sixteen"></div>
      
<div class="review">

    <span>Avis (4.7/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-europe"></i>Alpes, France</p>
  
</div>
      
<h5>180 € / Personne</h5>
      
</div>
      
      
<h4 class="product-name">Parapente</h4>
      
<div class="description">
    <p class="text-description">Retrouvez-vous en tête-à-tête avec les montagnes des Alpes françaises, en parapente à plus de 300 mètres de hauteurs, avec un instructeur habituer de la discipline qui saura vous guider durant le vol.</p>
</div>
      
      
<div class="button-container">  
  <div class="Cart">
      
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
      
  </div> 

  
<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>
</div>
      
      
      
<!--17th Card of AA-->
<div class="cards">
<div class="content">
        
<div id="seventeen" class="img"></div>
        
<div class="review">

    <span>Avis (4.5/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><i id="world-icon" class="fa-solid fa-earth-asia"></i>Pattaya, Thailande</p>

</div>
        
<h5>250 € / Personne</h5>
        
</div>
        
        
<h4 class="product-name">Saut en Parachute</h4>
        
<div class="description">
    <p class="text-description">Prenez encore plus de hauteur et sauter en parachute avec pour vue l’archipel entier de la Thaïlande, l’eau turquoise, les plages de sable blanc, la faune et la flore comme accompagnement.</p>
</div>
        
        
<div class="button-container">  
  <div class="Cart">
      
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
      
  </div>
  

<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>        
</div>
        
      
      
<!--18th Card of AA-->
<div class="cards">
<div class="content">
        
<div id="eighteen" class="img"></div>
        
<div class="review">

    <span>Avis (4.5/6)<i id="stars-icon" class="fa-solid fa-star"></i></span>
    <p class="Locate"><img id="world-icon" width="19" height="19" src="https://img.icons8.com/color/48/mars-planet.png" alt="mars-planet"/>Mars, Universe</p>

</div>
        
<h5>6 Milliards € / Personne</h5>
        
</div>
        
        
<h4 class="product-name">Expédition sur Mars</h4>
        
<div class="description">
    <p class="text-description">Prenez encore plus de hauteur et sauter en parachute avec pour vue l’archipel entier de la Thaïlande, l’eau turquoise, les plages de sable blanc, la faune et la flore comme accompagnement.</p>
</div>
        
        
<div class="button-container">  
  <div class="Cart">
      
      <button id="cart-button"><i id="cart-icon" class="fa-solid fa-cart-shopping"></i>Ajouter au panier</button>
      
  </div>
  

<div id="date-hours">

<input type="date" name="Date" id="departure-date" required>

<label>
 <select> 

     <option>Choisir un créneau</option>   

         <option>10h30</option>
         <option>12h30</option>
         <option>14h30</option>
         <option>16h30</option>
         <option>18h30</option>
         <option>20h30</option>
         <option>22h30</option>
         <option>00h30</option>

 </select>
</label>
</div>   


</div>        
</div>
      
      
<!--End of product container6-->            
</div>
<!--End of AA-->
</section>



<!--Avis Alt-->
<section>
<h2 class="avs-title">Derniers. Avis. Activitées en Altitude</h2>
  
<div class="avs-container">
  

<div class="avs-grid"><h3 class="avs-people">Aaron Judge</h3>
   
    <p class="avs-grid-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur architecto deleniti veritatis commodi!</p>
    <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
  

<div class="avs-grid"><h3 class="avs-people">Mookie Bets</h3>

    <p class="avs-grid-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum quas quidem sapiente iste dicta dolorum.</p>
    <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
  

<div class="avs-grid"><h3 class="avs-people">Bryce Harper</h3>

    <p class="avs-grid-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates consequuntur, sequi iusto repellendus!</p>
    <img id="avs-ic" src="/assets/img/icons/check-small-svgrepo-com.svg" height="50" width="50">
</div>
  
</div>
</section>
<!--End Of Activities-->



</main>



<div class="footer-line"></div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init();</script>

<script src="/assets/js/ajax/script-menu.js"></script>

<script src="/assets/js/ajax/filter.js"></script>

<script src="/assets/js/ajax/cart.js"></script>


<?php require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/footer.php';?>
</body>
</html>