<?php
require "functions.php";
require "Database.php";
$config = require("config.php");

$db = new Database($config ["database"]);
$select = "SELECT * FROM posts";
// Meklēšanas poga - submit un input
// Karakstit kka PHP
// Atgriezt datus no SQL datu bāzes

$params = [];
if(isset($_GET["search_query"]) && $_GET["search_query"] != "" ) {
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= "WHERE content LIKE :nosaukums"; //Sagatavotais parametrs
    $params = ["nosaukums" =>$search_query]; //Saistītais Parametrs
}
$posts = $db->query($select, $params)->fetchAll();

echo "<h1>Blogs</h1>";

echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";

if(count($posts) == 0 ){
    echo "Nav Atrasts";
}

echo "<ul>";
    foreach ($posts as $post){
        echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";
