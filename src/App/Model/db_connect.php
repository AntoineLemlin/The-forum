<?php


$servername="mysql";
$usern="root";
$passw="root";
$port="3306";
try{
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=Theforum",$usern,$passw);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";
} catch(PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>"; 
}



?>