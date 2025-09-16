<?php

require_once("../db/connection.php");

$sql_category = "select * from category";

$res_category = $pdo->query($sql_category);

$res_category->execute();

$data_category = $res_category->fetchAll(PDO::FETCH_ASSOC);
