<?php
// Requires
require_once '../../models/usersModels.php';
require_once '../../useful/functions.php';
require_once '../../useful/regex.php';
require_once '../../useful/Users_formValidation.php';



// Start of the Session
session_start();



// Checking if the user is logged in, if yes im redirecting him to the page "my account".
if (isset($_SESSION['user'])) {
    header('Location: /account');
    exit;
}



// If the form get sent with 'POST' method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
/**Create a new instance of the User class
 * */ 
$user = new User();


    //Check if the input are not empty
    if (!empty($_POST['email'])) {
        //Checking if the email is already validated
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // And i stock it in a variable
            $user->email = $_POST['email'];

            if (!$user->checkIfExistsByEmail()) {
                $errors['email'] = $errors['password'] = USERS_LOGIN_ERROR;
            } else {
                $user->password = $user->getPassword();
            }
        } else {
            // Otherwise, i completed the table errors
            $errors['email'] = USERS_EMAIL_ERROR_INVALID;
        }
    } else {
        $errors['email'] = USERS_EMAIL_ERROR_EMPTY;
    }



    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $errors['password'] = USERS_PASSWORD_ERROR_EMPTY;
    }


    // If i had no errors
    if (empty($errors)) {
        if (!password_verify($password, $user->password)) {
            $errors['email'] = $errors['password'] = USERS_LOGIN_ERROR;
        } else {
            if (isset($_POST['remember'])) {
                setcookie('email', $user->email, time() + 60, '/');
                setcookie('password', $password, time() + 60, '/');
            }

            $_SESSION['user'] = $user->getInfosByEmail();
            header('Location: /index.php?');
            exit;
        }
    }
}



// Require of the Views
require_once '/Applications/XAMPP/xamppfiles/htdocs/sm/views/users/login.php';