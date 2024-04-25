<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/Account.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">
    <link rel="stylesheet" href="/assets/media/mediaqueryAccount.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Account</title>
</head>



<body>



<!--Account Form-->
<div class="First-FormContainer">

<form action="/account" method="POST">
    <h1><strong>Mon Compte</strong></h1>
     <input class="sub" type="submit" name="deleteAccount" value="Delete">
</form>
</div>


<?php if (isset($success)) { ?>
<p data-aos="fade-left" id="messages"><?= $success ?></p>
<?php } ?>
                
<?php if (isset($errors['updateAccount'])) { ?>
<p data-aos="fade-left" id="messages"><?= $errors['updateAccount'] ?></p>
<?php } ?>             


<div class="Second-FormContainer">
<form action="/account" method="POST">

<h2>Modifier mon compte</h2> <p id="user-role">Rôle : <?= $userInfo->roleName ?></p>
<br>      
         

            <?php if (isset($errors['firstName'])) { ?>
            <p id="messages"><?= $errors['firstName'] ?></p>
            <?php } ?>

            <label for="firstName">Prénom :</label>
            <input type="text" id="firstName" name="firstName" placeholder="<?= $userInfo->firstName ?>" value="<?= $userInfo->firstName ?>">
                    
            
            
            <?php if (isset($errors['lastName'])) { ?>
            <p id="messages"><?= $errors['lastName'] ?></p>
            <?php } ?>

            <label for="lastName">Nom :</label>
            <input type="text" id="lastName" name="lastName" placeholder="<?= $userInfo->lastName ?>" value="<?= $userInfo->lastName ?>">
            
           
           
            <?php if (isset($errors['email'])) { ?>
            <p id="messages"><?= $errors['email'] ?></p>
            <?php } ?>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="<?= $userInfo->email ?>" value="<?= $userInfo->email ?>">
                    
        
                           
            <?php if (isset($errors['phoneNumber'])) { ?>
            <p id="messages"><?= $errors['phoneNumber'] ?></p>
            <?php } ?>

            <label for="phoneNumber">Numéro de téléphone :</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="<?= $userInfo->phoneNumber ?>" value="<?= $userInfo->phoneNumber ?>">

        

            <?php if (isset($errors['cardNumber'])) { ?>
            <p id="messages"><?= $errors['cardNumber'] ?></p>
            <?php } ?>

            <label for="cardNumber">Numéro de carte bancaire :</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="<?= $userInfo->cardNumber ?>" value="<?= $userInfo->cardNumber ?>">
                       

            <?php if (isset($errors['birthDate'])) { ?>
            <p data-aos="zoom-out-up" id="messages"><?= $errors['birthDate'] ?></p>
            <?php } ?>

            <label for="birthDate">Date de naissance :</label>
            <input type="date" id="birthDate" name="birthDate" placeholder="<?= $userInfo->birthDate ?>" value="<?= $userInfo->birthDate ?>">
                       
        
        
<input class="sub" type="submit" name="updateInfos" value="Modifier les informations">
     
</form>
</div>


       <?php if (isset($errors['updatePassword'])) { ?>
            <p id="messages"><?= $errors['updatePassword'] ?></p>
       <?php } ?>


<div class="Third-FormContainer">       
<form action="/account" method="POST">
           
           <h2>Modifier mon mot de passe</h2>

           <label for="password">Mot de passe</label>
    
           <input type="password"  name="password" id="password">


           <?php if (isset($errors['password'])) { ?>

           <p data-aos="fade-left" id="messages"><?= $errors['password'] ?></p>
           <?php } ?>


           <?php if (isset($errors['password_confirm'])) { ?>
           <p data-aos="fade-left" id="messages"><?= $errors['password_confirm'] ?></p>
           <?php } ?>

           <label for="password_confirm" >Confirmation du mot de passe</label>
           <input type="password" name="password_confirm" id="password_confirm">
            

<input class="sub" type="submit" value="Modifier" name="updatePassword">
                   
</form>

</div>
<!--End Of Form Account-->



<div class="footer-line"></div>


<script src="/assets/js/ajax/script-menu.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script> AOS.init();</script>

</body>
</html>