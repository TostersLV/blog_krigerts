<?php

require "functions.php";
require "Database.php";
$config = require("config.php"); 

$db = new Database($config["database"]);



$sql = "SELECT * FROM posts";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;";
    $params = ["search_query" => $search_query];
} 

$posts = $db->query($sql, $params)->fetchAll();



echo "hi<br>";
echo "  <form >
        <input type='text' name='search_query'>
        <button> Meklet </button>
        </form>";


echo "<ul>";
foreach($posts as $post){
    echo "<li>" . $post["content"] . "</li>";

};
echo "</ul>";