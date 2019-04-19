<?php
require('database.php');
?>

<?php
//set default value of variables for initial page load
if (!isset($firstName)) {
    $firstName = '';
}
if (!isset($lastName)) {
    $lastName = '';
}
if (!isset($userName)) {
    $userName = '';
}
if (!isset($email)) {
    $email = '';
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Whiskey Bookface</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <main>
            <h1>Registration Page</h1>

            <form action="confirmation.php" method="post">

                <div id="data">
                    <label>First Name:</label>
                    <input type="text" name="firstName"
                           value="<?php echo htmlspecialchars($firstName); ?>"> &nbsp; <?php if (!empty($errorMessageFirst)) { ?> <span class="error"><?php echo htmlspecialchars($errorMessageFirst); ?></span> <?php } ?>
                    <br>

                    <label>Last Name:</label>
                    <input type="text" name="lastName"
                           value="<?php echo htmlspecialchars($lastName); ?>"> &nbsp; <?php if (!empty($errorMessageLast)) { ?> <span class="error"><?php echo htmlspecialchars($errorMessageLast); ?></span> <?php } ?>
                    <br>

                    <label>User Name:</label>
                    <input type="text" name="userName"
                           value="<?php echo htmlspecialchars($userName); ?>"> &nbsp; <?php if (!empty($errorMessageUser)) { ?> <span class="error"><?php echo htmlspecialchars($errorMessageUser); ?></span> <?php } ?>
                    <br>

                    <label>Email Address:</label>
                    <input type="text" name="email"
                           value="<?php echo htmlspecialchars($email); ?>"> &nbsp; <?php if (!empty($errorMessageEmail)) { ?> <span class="error"><?php echo htmlspecialchars($errorMessageEmail); ?></span> <?php } ?>
                    <br>
                </div>

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Register"><br>
                </div>

                <a href="display_all.php">Display User Page</a>
            </form>
        </main>
    </body>
</html>