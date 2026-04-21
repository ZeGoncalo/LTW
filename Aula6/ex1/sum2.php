<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sum Result</title>
</head>
<body>

<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$sum = $num1 + $num2;

echo "<h2>Result: $sum</h2>";
?>

<br>
<a href="form2.html">Back to form</a>

</body>
</html>