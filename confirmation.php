<?php 
//get the data from the form
$firtName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST,'lastName');
$userName = filter_input(INPUT_POST,'userName');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

if($firtName == FALSE)
{$errorMessageFirst = 'Must input a first name.';}


if($lastName == FALSE)
{$errorMessageLast = 'Must input a last name.';}

if($userName == FALSE)
{$errorMessageUser = 'Must input a userName.';}


if($email == FALSE)
{$errorMessageEmail = 'Must input an email address.';}


if ($errorMessageFirst != '')
{
    include('index.php');
    exit();
}
else if ($errorMessageLast != '')
{
    include('index.php');
    exit();
}
else if ($errorMessageUser != '')
{
    include('index.php');
    exit();
}
else if ($errorMessageEmail != '')
{
    include('index.php');
    exit();
}

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
        <title></title>
        
    </head>
    <body>
        <h1> Welcome to </h1>
        
        <label> First Name</label>
        <span> <?php echo $firtName; ?> </span> <br>
        
        <label> Last Name </label>
        <span> <?php echo $lasName; ?> </span><br>
        
        <label> User Name</label>
        <span> <?php echo $userName; ?> </span><br>
        
         <label> Email Address</label>
        <span> <?php echo $email; ?> </span><br>
        
    </body>
</html>
