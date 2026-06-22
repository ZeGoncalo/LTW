<?php 
    function drawMovie($movie){
        echo "<h2> {$movie['title']} </h2>";
        echo "<p> Released in {$movie['year']} </p>";
    }
?>