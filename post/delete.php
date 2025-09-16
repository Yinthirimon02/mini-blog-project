<?php

    require_once("../db/connection.php");

    $id = $_GET['id'];

    $sql_select = "select image from post where id=?";
    $res_select = $pdo->prepare($sql_select);
    $res_select->execute([$id]);

    $data = $res_select->fetch(PDO::FETCH_ASSOC);

    $delete_image_name= $data['image'];

    $sql = 'delete from post where id=?';

    $res = $pdo->prepare($sql);

    $res->execute([$id]);

    //to delete img

    unlink("../image/$delete_image_name");

    header("Location: list.php");
    