<?php 
    function getArticle($db,$id){
        $stmt = $db->prepare("SELECT * FROM news WHERE id=?");
        $stmt->execute([$id]);
        $article = $stmt->fetch();
        return $article;
    }
?>