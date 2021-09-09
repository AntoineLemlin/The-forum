<?php 

    function fetchBoard(){
        require("../App/Model/db_connect.php"); 
        $sql = "SELECT * from Boards";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $fetchData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $fetchData;
    }


?>