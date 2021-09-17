<?php


$servername="188.166.24.55";
$usern="forum-pediluve";
$passw="szAyweNe3stc7VIx";
$port="3306";
try{
    $conn = new PDO("mysql:host=$servername;dbname=forum-pediluve",$usern,$passw);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>"; 
}



?>