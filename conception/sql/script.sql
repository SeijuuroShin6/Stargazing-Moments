--Creation of my DataBase, with the universal encoding
CREATE DATABASE `sm`
CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;


--Creation of my table users, with 7 categories 
CREATE TABLE `sm_users` (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`firstName` VARCHAR(255),
`lastName` VARCHAR(255),
`email` VARCHAR(255),
`phoneNumber` VARCHAR(255),
`password` VARCHAR(255),
`cardNumber` VARCHAR(20),
`birthDate` date NOT NULL,
`id_users_roles` int NOT NULL);


--Creation of my table users_roles, with 2 categories 
CREATE TABLE `sm_users_roles` (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(20));

--Adding new values into the users_roles table
INSERT INTO `sm_users_roles` (`id`, `name`) VALUES
(1, 'Utilisateur'),
(136, 'Modérateur'),
(640, 'Administrateur');