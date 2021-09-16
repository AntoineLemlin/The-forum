<?php 

    function fetchBoard(){
        require("../App/Model/db_connect.php"); 
        $sql = "SELECT * from Boards order by CASE when Name = 'General' THEN 1 END DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $fetchData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $fetchData;
    }

    function BoardCount($name){
        require("../App/Model/db_connect.php"); 
        $sql = "SELECT COUNT(Topics.Topic_Number) as nb_topics,COUNT(ID_Message) as nb_messages
                from Boards inner join Topics
                on Topics.Board_Name=Boards.Name
                inner join Messages
                on Topics.Topic_Number=Messages.Topic_Number
                where Name=upper(:Name)";

        $stmt = $conn->prepare($sql);
        $stmt->BindParam(":Name",$name);
        $stmt -> execute();

        $CountData = $stmt -> fetch(PDO::FETCH_ASSOC);

        return $CountData;





    }


?>