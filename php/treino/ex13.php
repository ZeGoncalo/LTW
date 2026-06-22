<?php 
    function drawGame($game){
        echo "<article>";
        echo "<h2>{$game['title']}</h2>";
        echo "<ul>";
        foreach($game["platforms"] as $platform){
            echo "<li>{$platform}</li>";
        }
        echo "</ul>";
        echo "</article>";
    }
?>

<?php 
    function getUser($db,$id){
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();
        return $user;
    }
?>

<?php 
    function drawUsers($users){
        echo "<section>";
        foreach($users as $user){
            echo "<p>{$user['name']}</p>";
        }
        echo "</section>";
    }
?>

<?php 
    session_start();
    if (isset($_SESSION['username'])){
        echo "<p>Welcome {$_SESSION['username']}</p>";
    }
?>