<?php 
    function updateArticle($db,$id,$title){
        $stmt = $db->prepare("UPDATE news SET title = ? WHERE id = ?");
        $stmt->execute([$title,$id]);
    }
?>