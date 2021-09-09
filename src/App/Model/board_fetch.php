<?php 

    function fetchBoard(){
        require("../App/Model/db_connect.php"); 
        $sql = "SELECT * from Boards order by CASE when Name = 'General' THEN '1' END DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $fetchData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $fetchData;
    }


?>