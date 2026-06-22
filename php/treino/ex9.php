<?php 
    if(isset($_SESSION["username"])){
        echo "<p>Welcome {$_SESSION['username']}</p>";
    }
?>