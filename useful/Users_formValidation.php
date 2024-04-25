<?php
$errors = [];

// USERS

// Email
define('USERS_EMAIL_ERROR_EMPTY', 'L\'adresse mail est requise');
define('USERS_EMAIL_ERROR_INVALID', 'L\'adresse mail est invalide. Elle ne peut contenir que des lettres, des chiffres, des tirets, des underscores, des points et des arobases');
define('USERS_EMAIL_ERROR_EXISTS', 'L\'adresse mail existe déjà');


// firstName
define('USERS_FIRSTNAME_ERROR_EMPTY', 'Le prénom est requis');
define('USERS_FIRSTNAME_ERROR_INVALID', 'Le prénom est invalide. Il ne peut contenir que des lettres, des espaces, des tirets et des apostrophes');
define('USERS_FIRSTNAME_ERROR_EXISTS', 'Le pénom existe déjà');


// lastName
define('USERS_LASTNAME_ERROR_EMPTY', 'Le nom est requis');
define('USERS_LASTNAME_ERROR_INVALID', 'Le nom est invalide. Il ne peut contenir que des lettres, des espaces, des tirets et des apostrophes');
define('USERS_LASTNAME_ERROR_EXISTS', 'Le nom existe déjà');


// password
define('USERS_PASSWORD_ERROR_EMPTY', 'Le mot de passe est requis');
define('USERS_PASSWORD_ERROR_INVALID', 'Le mot de passe est invalide. Il doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial');


// password-confirm
define('USERS_PASSWORD_CONFIRM_ERROR_INVALID', 'La confirmation du mot de passe est invalide. Les mots de passe ne correspondent pas');
define('USERS_PASSWORD_CONFIRM_ERROR_EMPTY', 'La confirmation du mot de passe est requise');


// phoneNumber
define('USERS_PHONENUMBER_ERROR_EMPTY', 'Le numéro de téléphone est requis');
define('USERS_PHONENUMBER_ERROR_INVALID', 'Le numéro de téléphone est invalide. Il ne peut contenir que des nombres et des chiffres');
define('USERS_PHONENUMBER_ERROR_EXISTS', 'Le numéro de téléphone est déja utiliser');


// cardNumber 
define ('USERS_CARDNUMBER_ERROR_EMPTY', 'Le numéro de carte bancaire est requis');
define ('USERS_CARDNUMBER_ERROR_INVALID','Le numéro de carte est invalide. Il ne peut contenir que des nombres et des chiffres');
define ('USERS_CARDNUMBER_ERROR_EXISTS', 'Le numéro de carte est déja utiliser');


// birthDate
define('USERS_BIRTHDATE_ERROR_EMPTY', 'La date de naissance est requise');
define('USERS_BIRTHDATE_ERROR_INVALID', 'La date de naissance est invalide. Elle doit être au format YYYY-MM-DD');


// Forms
define('USERS_LOGIN_ERROR', 'Votre adresse mail ou votre mot de passe est incorrect');


define('USERS_UPDATE_SUCCESS', 'Votre compte a bien été mis à jour');
define('USERS_UPDATE_ERROR', 'Une erreur est survenue lors de la mise à jour de votre compte');


define('USERS_PASSWORD_UPDATE_SUCCESS', 'Votre mot de passe a bien été mis à jour');
define('USERS_PASSWORD_UPDATE_ERROR', 'Une erreur est survenue lors de la mise à jour de votre mot de passe');


define('USERS_ADD_SUCCESS', 'Votre compte a bien été créé avec succès, veuillez vous connectez afin d\'accéder à vos informations');
define('USERS_ADD_ERROR', 'Une erreur est survenue lors de la création de votre compte');
?>