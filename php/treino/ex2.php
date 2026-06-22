<?php 
    function drawStudent($student){
        echo "<h3>{$student['name']}</h3>";
        echo "";
        echo "<ul>";
        $grades=$student["grades"];
        foreach($grades as $grade){
            echo "  <li>{$grade}</li>";
        }
        echo "</ul>";
    }
?>