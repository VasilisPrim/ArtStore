<!DOCTYPE html>
<?php require_once('config.php'); ?>
<html lang="en">
<head lang="en">
    <meta charset="utf-8">
    <title>View Student Record</title>
</head>
<body>

<?php

if (!isset($_GET['id']) ) {
           
    echo  "Please choose a <a href='listStudents.php'> Customer </a> first </body></html>"; 
    exit;
}

try {
    
       $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
       $sql = 'delete from customer where id=:id';
       
       $stmt = $pdo->prepare($sql);
       $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
       $stmt->execute();
       $row = $stmt->fetchAll();
      
        $stmt = null;
                                                                                                                                                                                                                 
        header('Location:assign3-getCustomers.php');
        
       
        $pdo=null;
 }
 catch (PDOException $e) {
    die( $e->getMessage() );
 }

?>