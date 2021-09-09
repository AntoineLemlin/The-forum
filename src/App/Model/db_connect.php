<?php


$servername="mysql";
$usern="root";
$passw="root";
$port="3306";
try{
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=TheForum",$usern,$passw);
=======
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=Theforum",$usern,$passw);
>>>>>>> fa8cb36903058fdae5885cb6471b0e939210d775
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";
} catch(PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>"; 
}



?>