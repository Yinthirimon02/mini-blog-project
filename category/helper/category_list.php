<?php

require_once("../db/connection.php");

    $sql = "select * from category";
    $res = $pdo->query($sql);
    $res->execute();

    $data = $res->fetchAll(PDO::FETCH_ASSOC);