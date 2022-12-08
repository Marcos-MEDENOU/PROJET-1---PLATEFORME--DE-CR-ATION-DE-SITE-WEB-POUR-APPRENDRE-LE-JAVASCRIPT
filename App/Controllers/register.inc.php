<?php
require "../Models/Connection.php";
require "../Models/RegisterModel.php";
require "../Controllers/RegisterController.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password-confirm"];

    $registerCtrl = new RegisterController(
        $firstname,
        $lastname,
        $username,
        $email,
        $password, 
        $password_confirm
    );
    
    if( $registerCtrl->valideInput()=='false'){
         //Envoyer les informations dans la base de donnée
        $registerModel = new RegisterModel($firstname, $lastname, $username, $email, $password);
            
        $registerModel->registerUser();
    }
}