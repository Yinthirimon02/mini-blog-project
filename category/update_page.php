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

    $id = $_GET['id'];

    $sql = "select * from category where id=?";
    $res = $pdo->prepare($sql);
    $res->execute([$id]);

    $data = $res->fetch(PDO::FETCH_ASSOC);

    // echo "<pre>";  
    // print_r($data);

    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2 shadow-lg p-5">
                <form action="update.php?id=<?php echo $id; ?>" method="POST">
                    <?php echo $data['id']; ?>
                    <!-- <input type="text" name="update_id" value="<?php echo $data['id']; ?>"> -->


                    <input type="text" name="category" id="" value="<?php echo $data['name']; ?>" class="form-control" placeholder="Category Name..">
                    <a href="list.php"> <input type="button" value="Back" class="btn bg-dark text-white  mt-3"></a>
                    <input type="submit" value="Update" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
</body>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.umd.min.js"></script>

</html>