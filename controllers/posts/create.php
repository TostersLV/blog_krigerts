<?php
$navbar = "css/navbar.css";
$style = "css/create.css";
$pageTitle = "create";
require "views/posts/create.view.php";

if(isset($_POST["content"]) && $_POST["content"] != ""){
    $sql = "INSERT INTO posts(content) VALUES (:content)";
    $params = ["content" => $_POST["content"]];
    $post = $db->query($sql, $params);
    header("Location: /"); 
    exit();

    
}




