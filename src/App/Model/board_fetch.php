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
        $sql = "SELECT COUNT(Topic_Number) as nb_topics
                from Boards 
                where upper(BoardName)=upper(:Name)";

        $stmt = $conn->prepare($sql);
        $stmt->BindParam(":Name",$name);
        $stmt -> execute();

        $CountData = $stmt -> fetch(PDO::FETCH_ASSOC);

        return $CountData;

    }

    function MessageCount($name){

        require("../Model/db_connect.php"); 
        $sql = "SELECT COUNT(ID_Message) as nb_messages
                from  Topics inner join Messages
                on Topics.Topic_Number=Messages.Topic_Number
                where upper(Name)=upper(:Name)";

        $stmt = $conn->prepare($sql);
        $stmt->BindParam(":Name",$name);
        $stmt -> execute();

        $CountData = $stmt -> fetch(PDO::FETCH_ASSOC);

        return $CountData;


    }


?>