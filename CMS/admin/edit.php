<?php include("templates/header.php"); ?>

<?php
    $id = $_GET["id"];
    if ($id) {
        include("connect.php");
        $sqlselectpost = "SELECT * from posts WHERE id = $id";
        $result = mysqli_query($conn, $sqlselectpost);
    }
    else{
        echo "Post is not found.";
    }
?>

<div class="create-form w-100 mx-auto p-4" style="max-width: 700px;">
    <form action="process.php" method="post">
        <?php
            while ($data = mysqli_fetch_array($result)) {
        ?>

        <div class="form-field mb-4">
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title here" value="<?php echo $data['title']; ?>">
        </div>

        <div class="form-field mb-4">
            <textarea name="summary" class="form-control" id="summary" cols="30" rows="10" placeholder="Enter summary here"><?php echo $data['summary']; ?></textarea>
        </div>

        <div class="form-field mb-4">
            <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="Enter content here"><?php echo $data['content']; ?></textarea>
        </div>
        <input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>>
        <div class="form-field">
            <button type="submit" class="btn btn-primary" name="update" id="update">Submit</button>
        </div>

        <?php
         }
        ?>
    </form>
</div>

<?php include("templates/footer.php"); ?> 