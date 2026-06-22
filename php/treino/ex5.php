<?php 
    function drawLibrary($library){
        echo "<section>";
        echo "<h1>{$library['name']}</h1>";
        foreach($library['books'] as $book){
            echo "<article>";
            echo "<h2>{$book['title']}</h2>";
            echo "<p>{$book['author']}</p>";
            echo "</article>";
        }
        echo "</section>";
    }
?>