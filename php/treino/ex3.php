<?php 
    function drawBook($book){
        echo "<article>";
        echo "<h2>{$book['title']}</h2>";
        echo "<p>{$book['author']}</p>";
        echo "<p>{$book['year']}</p>";
        echo "</article>";
    }
?>