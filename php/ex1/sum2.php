<?php
include_once("form.html");
function sum($a, $b) {
    return $a + $b;
}
echo sum($_GET["num1"], $_GET["num2"]); 
?>