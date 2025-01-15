<?php 

$navbar = "css/navbar.css";

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE category_name LIKE :search_query;";
    $params = ["search_query" => $search_query];
} 

$categories = $db->query($sql, $params)->fetchAll();



require "views/categories.view.php";