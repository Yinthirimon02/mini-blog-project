<?php
require_once("../db/connection.php");
$category = $_POST['category'];

if ($category != "") {
    $sql = "insert into category(name) values (?)";

    $res = $pdo->prepare($sql);

    $res->execute([$category]);

    header("Location: list.php");
}else{
    header("Location: list.php");
}
