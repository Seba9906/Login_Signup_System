<?php

declare(strict_types = 1);

function signup_inputs(){

    $username_value = isset($_SESSION["signup_data"]["username"]) ? $_SESSION["signup_data"]["username"] : ''; //ternary operator
    $email_value = $_SESSION["signup_data"]["email"] ?? ''; //coalescent null

if(isset($_SESSION["errors_signup"]["username_taken"])){
    $username_value = ''; //if error, no pre-load username
}

if(isset($_SESSION["errors_signup"]["email_used"]) || isset($_SESSION["errors_signup"]["invalid_email"])){
    $email_value = '';
}

echo <<<HTML
    <input type="text" name="username" placeholder="Username" value="$username_value">
    <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="E-Mail" value="$email_value">
HTML;


}

function check_signup_errors(){
    if(isset($_SESSION["errors_signup"])){ //we defined this in signup.inc.php
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach($errors as $error){
            echo '<p class= "form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_signup"]);
    } else if(isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p class="form-succes">Signup success </p>';
    }
}