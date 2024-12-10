<?php

require "functions.php";

echo"Ello";


// 1. Izveidot DB ✔
// 2. Savienot ar DB ✔
// 3. Izvadit datus ✔
// db nosaukums, parole, lietotajvards


// Data Nource Name


$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

// PDO - PHP Data Object
$pdo = new PDO($dsn);

//1 Sagatavot vaicajumu (statement)
$statement = $pdo->prepare("SELECT * FROM posts");
//2. izpildit statement
$statement->execute();
// 3. Dabut datus no DB

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts [0] ["content"]);
echo"<ul>";
foreach($posts as $posts){
    echo "<li>" . $posts["content"] . "</li>";
}
echo"</ul>";
