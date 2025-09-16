<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php

    require_once("../db/connection.php");

    $sql = "select post.id, post.title, post.description, post.image, post.category_id, category.name as category_name from post left join category on category.id   =  post.category_id order by post.created_at";

    $res = $pdo->query($sql);

    $res->execute();

    $data = $res->fetchAll(PDO::FETCH_ASSOC);

    require_once("./helper/category_list.php");

    // echo "<pre>";
    // print_r($data_category);

    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-2 offset-5">
                <?php
                require_once("../source/nav.php");
                ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4 p-5">
                <form action="create.php" method="POST" enctype="multipart/form-data">
                    <div class="mt-2">
                        <img src="" alt="" id="output" class="w-50">
                    </div>
                    <div class="mt-2">
                        <input type="file" name="image" class="form-control" onchange="loadFile(event)">
                    </div>
                    <div class="mt-2">
                        <input type="text" name="title" id="" class="form-control" placeholder="Enter Title..">
                    </div>
                    <div class="mt-2">
                        <textarea name="description" class="form-control" placeholder="Enter Description.." cols="30" rows="5"></textarea>
                    </div>
                    <div class="mt-2">
                        <select name="category" id="" class="form-control">
                            <?php

                            foreach ($data_category as $item) {
                                echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Create" class="btn btn-primary" name="btn_create">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="row" style="margin-top: 80px;">
                    <?php
                    foreach ($data as $item) {
                        echo '<div class="col-4 mt-3">
                        <div class="card">
                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="../image/' . $item["image"] . '" class="img-fluid" style="height:250px" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">' . $item["title"] . '</h5>
                                <p class="card-text">' . mb_strimwidth($item["description"], 0, 50, '...') . '</p>
                                <p class="card-text text-danger">' . $item["category_name"] . '</p>
                                <div class="row">
                                    <div class="col-7"></div>
                                    <a href="detail.php?id=' . $item["id"] . '" class="col-1 text-white mx-1" class="col-1"><i class="fa-solid fa-circle-info text-secondary"></i></a>
                                    <a href="update_page.php?id=' . $item["id"] . '" class="col-1 text-white mx-1" class="col-1"><i class="fa-solid fa-pen-to-square text-primary"></i></a>
                                    <a href="delete.php?id=' . $item["id"] . '" class="col-1 text-white mx-1" class="col-1"><i class="fa-solid fa-trash text-danger"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>';
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.umd.min.js">
</script>
<script src="../js/imagePreview.js"></script>

</html>