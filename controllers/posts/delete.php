<?php 
require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(Validator::numbers($_POST["id"])){
    
    $sql = "DELETE FROM posts WHERE id = :id";
    $params = [ "id" => $_POST['id']];
    $db->query($sql, $params);
    header("Location: /");
    exit();
}
}
