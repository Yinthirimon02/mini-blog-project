<?php
require_once("../db/connection.php");
$category = $_POST['category'];

$sql = "insert into category(name) values (?)";

$res = $pdo->prepare($sql);

$res->execute([$category]);

header("Location: list.php");
