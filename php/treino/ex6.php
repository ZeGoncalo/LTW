<?php 
    function drawUser($user){
        echo "<h2>{$user['name']}</h2>";
        if ($user['admin']===true){
            echo "<p>Administrator</p>";
        }
        else{
            echo "<p>Regular User</p>";
        }
    }
?>