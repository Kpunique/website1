<?php
require_once('database.php');

?>

<?php 
    //set default value of variables for initial page load
    if (!isset($firstName)) { $firstName = ''; } 
    if (!isset($lastName)) { $lastName = ''; } 
    if (!isset($userName)) { $userName = ''; } 
    if (!isset($email)) { $email = ''; }
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Registration Page</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="confirmation.php" method="post">

        <div id="data">
            <label>First Name:</label>
            <input type="text" name="firstName"
                   value="<?php echo htmlspecialchars($firstName); ?>">
            <br>

            <label>Last Name:</label>
            <input type="text" name="lastName"
                   value="<?php echo htmlspecialchars($lastName); ?>">
            <br>

            <label>User Name:</label>
            <input type="text" name="userName"
                   value="<?php echo htmlspecialchars($userName); ?>">
            <br>
            
            <label>Email Address:</label>
            <input type="text" name="email"
                   value="<?php echo htmlspecialchars($email); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>