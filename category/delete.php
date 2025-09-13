<?php

#http://localhost:8888/blog_project/category/delete.php?id=1

require_once("../db/connection.php");

$id = $_GET['id'];

$sql = "delete from category where id = ?";

$res = $pdo->prepare($sql);

$res->execute([$id]);

header("Location: list.php");

?>