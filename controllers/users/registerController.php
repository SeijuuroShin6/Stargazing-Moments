<?php
// Requires
require_once '../../models/usersModels.php';
require_once '../../useful/functions.php';
require_once '../../useful/regex.php';
require_once '../../useful/Users_formValidation.php';



// Start of the Session
session_start();


// Checking if the user is logged in
if(!empty($_SESSION['user'])){
    header('Location: /account');
    exit;
}


// Checking form forms
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
/**Create a new instance of the User class
 * */    
$user = new User();

    
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $user->email = clean($_POST['email']);
            if ($user->checkIfExistsByEmail() == 1) {
                $errors['email'] = USERS_EMAIL_ERROR_EXISTS;
            }
        } else {
            $errors['email'] = USERS_EMAIL_ERROR_INVALID;
        }
    } else {
        $errors['email'] = USERS_EMAIL_ERROR_EMPTY;
    }



    if (!empty($_POST['firstName'])) {
        if (preg_match($regex['firstName'], $_POST['firstName'])) {
            $user->firstName = clean($_POST['firstName']);
        } else {
            $errors['firstName'] = USERS_FIRSTNAME_ERROR_INVALID;
        }
    } else {
        $errors['firstName'] = USERS_FIRSTNAME_ERROR_EMPTY;
    }



    if (!empty($_POST['lastName'])) {
        if (preg_match($regex['lastName'], $_POST['lastName'])) {
            $user->lastName = clean($_POST['lastName']);
        } else {
            $errors['lastName'] = USERS_LASTNAME_ERROR_INVALID;
        }
    } else {
        $errors['lastName'] = USERS_LASTNAME_ERROR_EMPTY;
    }


    if (!empty($_POST['password'])) {
        if (preg_match($regex['password'], $_POST['password'])) {
            if (!empty($_POST['password-confirm'])) {
                if ($_POST['password'] == $_POST['password-confirm']) {
                    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                } else {
                    $errors['password-confirm'] = USERS_PASSWORD_CONFIRM_ERROR_INVALID;
                }
            } else {
                $errors['password-confirm'] = USERS_PASSWORD_CONFIRM_ERROR_EMPTY;
            }
        } else {
            $errors['password'] = USERS_PASSWORD_ERROR_INVALID;
        }
    } else {
        $errors['password'] = USERS_PASSWORD_ERROR_EMPTY;
    }

    
    if (!empty($_POST['phoneNumber'])) {
        if (preg_match($regex['phoneNumber'], $_POST['phoneNumber'])) {
            $user->phoneNumber = clean($_POST['phoneNumber']);
        } else {
            $errors['phoneNumber'] = USERS_PHONENUMBER_ERROR_INVALID;
        }
    } else {
        $errors['phoneNumber'] = USERS_PHONENUMBER_ERROR_EMPTY;
    }

        
    if (!empty($_POST['cardNumber'])) {
        if (preg_match($regex['cardNumber'], $_POST['cardNumber'])) {
            $user->cardNumber = clean($_POST['cardNumber']);
        } else {
            $errors['cardNumber'] = USERS_CARDNUMBER_ERROR_INVALID;
        }
    } else {
        $errors['cardNumber'] = USERS_CARDNUMBER_ERROR_EMPTY;
    }

 

    if (!empty($_POST['birthDate'])) {
        if (preg_match($regex['date'], $_POST['birthDate'])) {
            if (checkDateValidity($_POST['birthDate'])) {
                $user->birthDate = $_POST['birthDate'];
            } else {
                $errors['birthDate'] = USERS_BIRTHDATE_ERROR_INVALID;
            }
        } else {
            $errors['birthDate'] = USERS_BIRTHDATE_ERROR_INVALID;
        }
    } else {
        $errors['birthDate'] = USERS_BIRTHDATE_ERROR_EMPTY;
    }



    
    if (empty($errors)) {
        if($user->create()) {
            $success = USERS_ADD_SUCCESS;
        } else {
            $errors['add'] = USERS_ADD_ERROR;
        }
    }
}



// Requires of the Views
require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/users/register.php';