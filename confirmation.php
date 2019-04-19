<?php
require_once('database.php');
//get the data from the form
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$userName = filter_input(INPUT_POST, 'userName');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);



if ($firstName == FALSE) {
    $errorMessageFirst = 'Must input a first name.';
} else {
    $errorMessageFirst = '';
}


if ($lastName == FALSE) {
    $errorMessageLast = 'Must input a last name.';
} else {
    $errorMessageLast = '';
}

if ($userName == FALSE) {
    $errorMessageUser = 'Must input a user name.';
} 
else if ($userName === checkUsername($userName))
{
$errorMessageUser = 'Username already taken.';
}
else {
    $errorMessageUser = '';
}


if ($email == FALSE) {
    $errorMessageEmail = 'Must input an email address.';
}
else if ($email === checkEmail($email))
{
    $errorMessageEmail = 'Email already taken.';
}
else
{
    $errorMessageEmail = '';
}


if ($errorMessageFirst != '') {
    include('index.php');
    exit();
} else if ($errorMessageLast != '') {
    include('index.php');
    exit();
} else if ($errorMessageUser != '') {
    include('index.php');
    exit();
} else if ($errorMessageEmail != '') {
    include('index.php');
    exit();
}

add_resirvation($firstName, $lastName, $userName, $email);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Whiskey Bookface</title>
        <link rel="stylesheet" type="text/css" href="style.css" >
    </head>
    <main>
    <body>
        <h1> Registration Completed </h1>

        <label> First Name:</label>
        <span> <?php echo $firtName; ?> </span> <br>

        <label> Last Name:</label>
        <span> <?php echo $lasName; ?> </span><br>

        <label> User Name:</label>
        <span> <?php echo $userName; ?> </span><br>

        <label> Email Address:</label>
        <span> <?php echo $email; ?> </span><br>
        
        <a href="index.php">Registration Page</a> <br>
        <a href="display_all.php">Display User Page</a>

    </body>
    </main>
</html>
