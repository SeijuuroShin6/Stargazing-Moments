<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Login</title>
</head>


<nav>
     <a id="home-lnk" href="/index.php"> 
        <p class="logo">SM.</p>
    </a>
</nav>



<body>



<!--Login Form-->
<div class="form-container">
    <form action="/login" method="POST">
        
      <h1 data-aos="zoom-in">Connexion</h1>
            
      <label data-aos="zoom-in" class="label" for="email">Adresse mail :</label>
      <input data-aos="zoom-in" type="email" name="email" id="email" placeholder="jin.sakai@gmail.com" value="<?= @$_COOKIE['email'] ?>">
      <?php if (isset($errors['email'])) { ?>
      <p id="messages"><?= $errors['email'] ?></p>
      <?php } ?>

        
      <label data-aos="zoom-in" class="label" for="password">Mot de passe :</label>
      <input data-aos="zoom-in" type="password" name="password" id="password" placeholder="......................" value="<?= @$_COOKIE['password'] ?>">
      <?php if (isset($errors['password'])) { ?>
      <p id="messages"><?= $errors['password'] ?></p>
      <?php } ?>



      <label class="RMR" data-aos="zoom-in" for="remember">Se souvenir de moi</label>
      <input data-aos="zoom-in" type="checkbox" name="remember" id="remember">
      <input data-aos="zoom-in" class="sub" type="submit" value="Se connecter">


   </form>
   
</div>
<!--End Of Login Form-->



<p>Pour retournez à l'accueil</p>
<div class="return-backwards">

<p>Essayez plutôt ici</p> <img src="/assets/img/icons/right-arrow-svgrepo-com.svg" height="50" width="40">

<a href="/index.php">
    
<button data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">Accueil</button></a>

</div>

<div>
<li>Conditions générales</li>
<li>Mentions légales</li>
<li>Nous rejoindre</li>
<li>Plan du site</li>
</div>

<script src="/Applications/XAMPP/xamppfiles/htdocs/sm/assets/js/ajax/script-menu.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init();</script>

</body>
</html>