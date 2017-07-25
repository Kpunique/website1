<?php
    $dsn = 'mysql:host=localhost;dbname=stickmanYOURNUMBERHERE';
    $username = 'root';
    $password = '';

    try {
        $db= new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
    
    function select_all()
    {
        global $db;
 
      $query = 'SELECT * FROM yourtablename';
      $statement = $db->prepare($query);
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }

?>
