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
                $id = $_GET["id"];
                if ($id) {
                    include("admin/connect.php");
                $sqlselect = "SELECT * from posts where id = $id";
                $result = mysqli_query($conn, $sqlselect);
                while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="post bg-light p-4 mt-5">
                <h1><?php echo $data["date"] ?></h1>
                <p><?php echo $data["title"] ?></p>
                <p><?php echo $data["content"] ?></p>
            </div>
            <?php
                }
            }
            else{
                echo "Post is not found.";
            }
            ?>
        </div>
    </div>

    <div class="footer bg-dark p-3 text-center position-absolute fixed-bottom">
        <a href="index.php" class="text-light text-decoration-none">View Website</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVDismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>