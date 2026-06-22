<?php 
    function drawAlbum($album){
        echo "<article>";
        echo "<h2>{$album['title']}</h2>";
        echo "<p>{$album['artist']}</p>";
        echo "<ol>";
        foreach($album["songs"] as $song){
            echo "<li>{$song}</li>";
        }
        echo "</ol>";
        echo "</article>";
    }
?>