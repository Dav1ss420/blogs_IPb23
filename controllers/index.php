<?php

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
$categories = $db->query($select, $params)->fetchAll();

require "views/index.view.php";