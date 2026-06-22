<?php 
    function getAllNews($db){
        $stmt = $db->prepare("SELECT * FROM news");
        $stmt->execute();
        $articles = $stmt->fetchAll();
        return $articles;
    }
$db = new PDO('sqlite:news.db'); 
getAllNews($db);
?>