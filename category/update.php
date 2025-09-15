<?php

require_once("../db/connection.php");

$update_category = $_POST['category'];
$id = $_GET['id'];

if ($update_category != "") {
    $sql = "update category set name=? where id=?";
    $res = $pdo->prepare($sql);
    $res->execute([$update_category, $id]);

    header("location:list.php");
}else{
    header("location:list.php");
}
