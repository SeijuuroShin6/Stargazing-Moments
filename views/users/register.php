<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/register.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Register</title>
</head>


<nav>
     <a id="home-lnk" href="/index.php"> 
        <p class="logo">SM.</p>
    </a>
</nav>


<body>

<div>
    <?php if (isset($success)) { ?>
        <p id="messages"><?= $success ?></p>

    <?php } else if (isset($errors['add'])) { ?>
       <p id="messages"><?= $errors['add'] ?></p>
<?php } ?>
</div>


<!--Register Form-->
<div class="form-container">


    <form action="/register" method="POST">
        <h1 data-aos="zoom-in-down">Inscription</h1>


        <?php if (isset($errors['email'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['email'] ?></p>
        <?php } ?>
        
        <label for="email">Adresse mail :</label>
        <input type="email" name="email" id="email" placeholder="jin.sakai@gmail.com">


        <?php if (isset($errors['firstName'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['firstName'] ?></p>
        <?php } ?>
        
        <label for="firstName">Prénom :</label>
        <input type="text" name="firstName" id="firstName" placeholder="Jin">


        <?php if (isset($errors['lastName'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['lastName'] ?></p>
        <?php } ?>

        <label for="lastName">Nom :</label>
        <input type="text" name="lastName" id="lastName" placeholder="Sakai">


        <?php if (isset($errors['password'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['password'] ?></p>
        <?php } ?>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" placeholder=".......................">


        <?php if (isset($errors['password-confirm'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['password-confirm'] ?></p>
        <?php } ?>

        <label for="password-confirm">Confirmation du mot de passe :</label>
        <input type="password" name="password-confirm" id="password-confirm" placeholder=".......................">


        <?php if (isset($errors['phoneNumber'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['phoneNumber'] ?></p>
        <?php } ?>

        <label data-aos="fade-right" for="phoneNumber">Numéro de téléphone :</label>
        <input data-aos="fade-up" type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="+33 1 23 45 67 89">
    

        <?php if (isset($errors['cardNumber'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['cardNumber'] ?></p>
        <?php } ?>

        <label data-aos="fade-right" for="cardNumber">Numéro de carte bancaire :</label>
        <input data-aos="fade-up" type="cardNumber" name="cardNumber" id="cardNumber" placeholder="1111-2222-3333-4444">


        <?php if (isset($errors['birthDate'])) { ?>
        <p data-aos="zoom-out-up" id="messages"><?= $errors['birthDate'] ?></p>
        <?php } ?>

        <label data-aos="fade-right" for="birthDate">Date de naissance :</label>
        <input data-aos="fade-up" type="date" name="birthDate" id="birthDate">

        <input data-aos="fade-up" class="sub" type="submit" value="S'inscrire">
    </form>

</div>
<!--End Of Register Form-->


<div>
<li>Conditions générales</li>
<li>Mentions légales</li>
<li>Nous rejoindre</li>
<li>Plan du site</li>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init();</script>

</body>
</html>