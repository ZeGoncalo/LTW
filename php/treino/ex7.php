<?php 
    function drawBooks($books){
        echo "<section>";
        foreach($books as $book){
            drawBook($book);
        }
        echo "</section>";
    }
?>