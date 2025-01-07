<?php 

require "functions.php";
require "Database.php";

$config = require("config.php"); 

$db = new Database($config["database"]);



$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE category_name LIKE :search_query;";
    $params = ["search_query" => $search_query];
} 

$categories = $db->query($sql, $params)->fetchAll();

echo "<h1> Kategorijas: </h1> <br>";

echo "hi<br>";
echo "  <form >
        <input type='text' name='search_query'>
        <button> Meklet </button>
        </form>";


echo "<ul>";
foreach($categories as $category){
    echo "<li>" . $category["category_name"] . "</li>";

};
echo "</ul>";