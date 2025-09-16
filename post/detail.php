<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Post</title>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
        require_once("../db/connection.php");

        $id = $_GET['id'];

        $sql = "select post.id, post.title, post.description, post.image, post.category_id, category.name as category_name from post left join category on category.id = post.category_id where post.id=?";

        $res = $pdo->prepare($sql);

        $res->execute([$id]);

        $data = $res->fetch(PDO::FETCH_ASSOC);

        require_once("../source/category_list.php");

        // echo "<pre>";

        // print_r($data);

    ?>
    <div class="container mt-5">
        <div class="my-5">
            <a href="list.php" class="text-decoration-none text-dark">
                <i class="fa-solid fa-arrow-left"></i> Back
            </a>
        </div>
        <div class="row">
            <div class="">
                <div class="row">
                    <div class="col-4">
                        <img src="../image/<?php echo $data['image']; ?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col">
                        <h3><?php echo $data['title']; ?></h3>
                        <p class="text-muted"><?php echo $data['description']; ?></p>
                        <h5 class="text-danger"><?php echo $data['category_name']; ?></h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.umd.min.js">
</script>

</html>