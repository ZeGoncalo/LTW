<?php
 $db= new PDO("sqlite:news.db");
 $stmt = $db->prepare("SELECT * FROM news");
 $stmt->execute();
 $articles= $stmt->fetchAll();
 foreach($articles as $article){
    echo "<h3>" . $article["title"] . "</h3>";
    echo "<p>" . $article["introduction"] . "</p>";
 }
?>