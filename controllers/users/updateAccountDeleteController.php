<?php
// Requires
require_once '../../models/usersModels.php';
require_once '../../useful/functions.php';
require_once '../../useful/regex.php';
require_once '../../useful/Users_formValidation.php';


// Start of the Session
session_start();



// Checking if the user is logged in
if(!isset($_SESSION['user'])) {
    header('Location: /login');
    exit;
}


$user = new User;
$user->id = $_SESSION['user']['id'];
$userInfo = $user->getById();





if(isset($_POST['updateInfos'])) {

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


    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $user->email = clean($_POST['email']);
            if ($user->checkIfExistsByEmail() == 1 && $user->email != $_SESSION['user']['email']) {
                $errors['email'] = USERS_EMAIL_ERROR_EXISTS;
            }
        } else {
            $errors['email'] = USERS_EMAIL_ERROR_INVALID;
        }
    } else {
        $errors['email'] = USERS_EMAIL_ERROR_EMPTY;
    }


    if (!empty($_POST['phoneNumber'])) {
        if (preg_match($regex['phoneNumber'], $_POST['phoneNumber'])) {
            $User->phoneNumber = clean($_POST['phoneNumber']);
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
    

    if(empty($errors)) {
        if($Users->update()){
            $_SESSION['user']['firstName'] = $user->firstName;
            $_SESSION['user']['email'] = $user->email;
            $success = USERS_UPDATE_SUCCESS;
        } else {
            $errors['updateAccount'] = USERS_UPDATE_ERROR;
        }
    }
}


 
if(isset($_POST['updatePassword'])) {
    
    if (!empty($_POST['password'])) {
        if (preg_match($regex['password'], $_POST['password'])) {
            if (!empty($_POST['password_confirm'])) {
                if ($_POST['password'] == $_POST['password_confirm']) {
                    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                } else {
                    $errors['password_confirm'] = USERS_PASSWORD_CONFIRM_ERROR_INVALID;
                }
            } else {
                $errors['password_confirm'] = USERS_PASSWORD_CONFIRM_ERROR_EMPTY;
            }
        } else {
            $errors['password'] = USERS_PASSWORD_ERROR_INVALID;
        }
    } else {
        $errors['password'] = USERS_PASSWORD_ERROR_EMPTY;
    }





/** Check if the table errors is empty, so there is no error
 * so the condition is executed
 * If the update is successful it will return true otherwise it will return false
 * So $.... will send a success message or an error message
 * */    
    if(empty($errors)) {
        if($user->updatePassword()){
            $success = USERS_PASSWORD_UPDATE_SUCCESS;
        } else {
            $errors['update'] = USERS_PASSWORD_UPDATE_ERROR;
        }
    }

}


/**Check if the user has clicked on a button called 'deleteAccount' and check if its true
 * Then it will called a method called delete() on the user object
 * If the method return true, the account has been deleted
 * Delete all the variables $SESSION and delete the session
 * redirecting the user to the home page
 */


if(isset($_POST['deleteAccount'])) {
    if($user->delete()) {
        unset($_SESSION);
        session_destroy();
        header('Location: /index-delete-account');
        exit;
    }
}



// Require of the Views
require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/parts/navbar.php';

require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/users/account.php';