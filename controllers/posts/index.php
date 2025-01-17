<?php
$navbar = "css/navbar.css";
$style = "css/style.css";

$sql = "SELECT * FROM posts";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;";
    $params = ["search_query" => $search_query];
} 

$posts = $db->query($sql, $params)->fetchAll();

$pageTitle = "Blog";

require "views/posts/index.view.php";