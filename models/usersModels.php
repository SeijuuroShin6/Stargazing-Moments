<?php
class User
{    
    public int $id;
    private $pdo;
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $phoneNumber;
    public string $password;
    public string $cardNumber;
    public string $birthDate;
    public int $id_users_roles;
    public string $sm_users_roles;



public function __construct()
{
        
    try {
        $this->pdo = new PDO('mysql:host=localhost;dbname=sm;charset=utf8', 'root', '');
        } catch (PDOException $e) {

    // If the connection is failing we redirecting the user to an error page
            header('Location: /error404');
    // die($e->getMessage());

        }
}



/**
     * Add a user in the database
     * @param string $email email adress of the user
     * @param string $firstName first name of the user
     * @param string $lastName last name of the user      
     * @param string $password password of the user
     * @param string $phoneNumber phone number of the user
     * @param string $cardNumber card number of the user
     * @param string $birthDate user birth date of the user
     * @param string $id_user_roles users id roles of the user
     * @return bool
*/
public function create()
{
    $sql = 'INSERT INTO `sm_users` (`firstName`, `lastName`, `email`, `phoneNumber`, `password`, `cardNumber`, `birthDate`,`id_users_roles`) 
    VALUES (:firstName,:lastName,:email,:phoneNumber,:password,:cardNumber,:birthDate, 1)';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
    $req->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
    $req->bindValue(':email', $this->email, PDO::PARAM_STR);
    $req->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
    $req->bindValue(':password', $this->password, PDO::PARAM_STR);
    $req->bindValue(':cardNumber', $this->cardNumber, PDO::PARAM_STR);
    $req->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        return $req->execute();
}

    
/**
     * Checking if the user is existing in the database with his mail address
     * @param string $firstName user first name
     * @return bool
*/
public function checkIfExistsByEmail() 
{
    $sql = 'SELECT COUNT(`email`) FROM `sm_users` WHERE `email` = :email';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':email', $this->email, PDO::PARAM_STR);
    $req->execute();
       return $req->fetch(PDO::FETCH_COLUMN);
}


/**
     * update user's firstName, lastName, mail, phoneNumber, password, cardNumber, birthDate.
     * @param string $firstName firstName of the user
     * @param string $lastName lastName of the user
     * @param string $email email of the user
     * @param string $phoneNumber phoneNumber of the user
     * @param string $password password of the user
     * @param string $cardNumber cardNumber of the user
     * @param string $birthDate birthDate of the user
     * @param int $id user id to modify
     * @return bool
*/
public function update()
{
    $sql = 'UPDATE `sm_users` SET `firstName` = :firstName, `lastName` = :lastName, `email` = :email, `phoneNumber` = :phoneNumber, `cardNumber` = :cardNumber, `birthDate` = :birthDate WHERE `id`= :id';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
    $req->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
    $req->bindValue(':email', $this->email, PDO::PARAM_STR);
    $req->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
    $req->bindValue(':cardNumber', $this->cardNumber, PDO::PARAM_STR);
    $req->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
    $req->bindValue(':id', $this->id, PDO::PARAM_INT);
       return $req->execute();
}


/**
     * update the user's password
     * @param string $password user password
     * @param int $id user's id modify
     * @return bool
*/
public function updatePassword()
{
    $sql = 'UPDATE `sm_users` SET password = :password WHERE id = :id';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':password', $this->password, PDO::PARAM_STR);
    $req->bindValue(':id', $this->id, PDO::PARAM_INT);
       return $req->execute();
}


/**
     * Recover the information in the database with his id
     * @param int $id User id that will help us recovers his information.
     * @return object User information
*/
public function getById()
{
    $sql = 'SELECT `firstName`, `lastName`, `email`, `phoneNumber`, `password`, `cardNumber`, 
    DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS `birthdateFr`, `birthDate`, `name` AS `roleName` 
    FROM `sm_users` 
    INNER JOIN `sm_users_roles` ON `sm_users`.`id_users_roles` = `sm_users_roles`.`id` 
    WHERE `sm_users`.`id` = :id';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':id', $this->id, PDO::PARAM_INT);
    $req->execute();
    return $req->fetch(PDO::FETCH_OBJ);
}


/**
     * Recover the user hashed password in the database
     * We gonna use it to verify the function password_verify that the user password is exactly the same one that is stared in the database
     * @param string $mail user mail to recover his password
     * @return string hash password
*/
public function getPassword()
{
    $sql = 'SELECT `password` FROM `sm_users` WHERE `email` = :email';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':email', $this->email, PDO::PARAM_STR);
    $req->execute();
       return $req->fetch(PDO::FETCH_COLUMN);
}


/**
     * Recover the user informations with his mail adress in the database
     * @param string $email user mail adress that will help us to recovers his informations
     * @return array user informations
*/
public function getInfosByEmail()
{
    $sql = 'SELECT `id`, `firstName`, `lastName`, `email`, `phoneNumber`, `cardNumber`, `password`, `id_users_roles` FROM `sm_users` WHERE `email` = :email';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':email', $this->email, PDO::PARAM_STR);
    $req->execute();
       return $req->fetch(PDO::FETCH_ASSOC);
}


/**
     * Delete a user with his id
     * @param int $id user id to delete
     * @return bool
*/
public function delete()
{
    $sql = 'DELETE FROM `sm_users` WHERE `id` = :id';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':id', $this->id, PDO::PARAM_INT);
       return $req->execute();
}
}