<?php


$servername="mysql";
$usern="root";
$passw="root";
$port="3306";
try{
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=TheForum",$usern,$passw);
=======
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=The-forum",$username,$password);
>>>>>>> dd8c2fa743a0078081174df147a81a92ea6131e1
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";
} catch(PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>"; 
}



?>