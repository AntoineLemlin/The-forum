<?php 

    function fetchBoard(){
        require("../Model/db_connect.php"); 
        $sql = "SELECT * from Boards";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $fetchData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $fetchData;
    }


?>