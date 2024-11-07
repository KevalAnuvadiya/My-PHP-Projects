<?php include("templates/header.php"); ?>

<div class="posts-list w-100 p-4">
<?php
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
  ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Publication Date</th>
            <th>Title</th>
            <th>Article</th>
            <th>Action</th>
        </tr>
        </thead>
        
        <tbody>
            <?php
                include("connect.php");
                $sqlselect = "SELECT * from posts";
                $result = mysqli_query($conn, $sqlselect);
                while ($data = mysqli_fetch_array($result)) {
            ?> 
            <tr>
            <td><?php echo $data["date"]?></td>
            <td><?php echo $data["title"]?></td>
            <td><?php echo $data["summary"]?></td>
            <td>
                <a class="btn btn-primary" href="view.php?id=<?php echo $data["id"]?>">View</a>
                <a class="btn btn-success" href="edit.php?id=<?php echo $data["id"]?>">Edit</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]?>">Delete</a>
            </td>       
            <?php        
                }
            ?>
        </tr>
        </tbody>
    </table>
</div>

<?php include("templates/footer.php"); ?>