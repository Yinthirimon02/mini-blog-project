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
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 shadow-sm p-5">
                <form action="" method="POST">
                    <div class="">
                        <input type="text" name="category" id="" class="form-control" placeholder="Category Name..">
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Create" class="btn btn-primary" name="btn_create">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="row shadow-sm p-4">
                    <div class="col-7">
                        <div class="">
                            <h4>Category Name</h4>
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn btn-secondary">Delete</button>
                        <button class="btn btn-danger">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    ?>
</body>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.umd.min.js"></script>

</html>