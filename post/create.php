<?php

require_once("../db/connection.php");

$title = $_POST['title'];
$description = $_POST['description'];
$category_id = $_POST['category'];

$image_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

$target_file = "../image/" . $image_name;

move_uploaded_file($tmp_name, $target_file);

$sql = "insert into post(title, description, image, category_id) values (?,?,?,?)"; 
$res = $pdo->prepare($sql);
$res->execute([$title, $description, $image_name, $category_id]);

header("Location: list.php");