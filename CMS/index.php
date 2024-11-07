<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark p-3 text-center">
        <h1><a href="index.php" class="text-light text-decoration-none">Simple Blogs</a></h1>
    </header>
    <div class="post-list mt-3">
        <div class="container">
            <?php
                include("admin/connect.php");
                $sqlselect = "SELECT * from posts";
                $result = mysqli_query($conn, $sqlselect);
                while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="row mb-4 p-3 bg-light">
                <div class="col-sm-2">
                    <?php echo $data["date"] ?>
                </div>
                <div class="col-sm-3">
                    <h3><?php echo $data["title"] ?></h3>
                </div>
                <div class="col-sm-5">
                    <?php echo $data["content"] ?>
                </div>
                <div class="col-sm-2">
                    <a href="view.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <div class="footer bg-dark p-3 text-center position-absolute fixed-bottom">
        <a href="admin/index.php" class="text-light text-decoration-none">Admin Panel</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVDismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>