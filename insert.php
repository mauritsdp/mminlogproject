<?php
include "connect.php";
try {

  
    $stmt = $conn->prepare("INSERT INTO login_data (us, psw) 
    VALUES (:us, :psw)");
    $stmt->bindParam(':us', $us);
    $stmt->bindParam(':psw', $psw);


 
    if (isset($_REQUEST['us']))
 {
    $us = $_POST['us'];
    $psw = $_POST['psw'];
    


    $stmt->execute(array(
        ':us' => (string)($us), 
        ':psw' => (string)($psw),

           ));
    
    }}
    catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
    
?>