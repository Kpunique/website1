<?php
    $dsn = 'mysql:host=localhost;dbname=whiskey_db';
    $username = 'root';
    $password = '';

    try {
        $db= new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
        //Displays the exception and keeps on rolling, uncomment the exit if you want it to halt instead
        //exit();
    }
    
    function select_all()
    {
        global $db;
 
      $query = 'SELECT * FROM members';
      $statement = $db->prepare($query);
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }
    
    function add_resirvation($firstName, $lastName, $userName, $email) {
    global $db;
    $query = 'INSERT INTO members
                 (firstName, lastName, userName, email)
              VALUES
                 (:firstName, :lastName, :userName, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':userName', $userName);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}

function checkUsername($userName)
{
    global $db;
    $query='SELECT * FROM members WHERE username=:userName';
    $statement = $db->prepare($query);
    $statement->bindValue(':userName',$userName);
    $statement->execute();
    $userN = $statement->fetch();
    $statement->closeCursor();
    $user_name=$userN['userName'];
   return $user_name;
            
}

function checkEmail ($email)
{
    global $db;
    $query='SELECT * FROM members WHERE email=:email';
    $statement= $db->prepare($query);
    $statement->bindValue(':email',$email);
    $statement->execute();
    $eMail = $statement->fetch();
    $statement->closeCursor();
    $user_email=$eMail['email'];
    return $user_email;
}

?>
