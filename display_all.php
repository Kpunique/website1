<?php
        require_once('database.php');
        $registrations = select_all();
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
        <h1>All User Page</h1>
        
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Email</th>
            </tr>
            
                <?php foreach ($registrations as $registration) : ?>
            <tr>
                <td> <?php echo $registration['firstName']; ?> </td>
                <td> <?php echo $registration['lastName']; ?> </td>
                <td> <?php echo $registration['userName']; ?> </td>
                <td> <?php echo $registration['email']; ?> </td>
            </tr>
            <?php                    endforeach;?>

        </table>
        <br>
        <a href="index.php">Registration Page</a>
    </body>
    </main>
</html>
