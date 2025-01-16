<?php

$sql = "SELECT * FROM posts WHERE id = :id";
$params = [  "id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();
if(!$_GET["id"]){
    echo "neiet";
}





require "views/posts/edit.view.php";