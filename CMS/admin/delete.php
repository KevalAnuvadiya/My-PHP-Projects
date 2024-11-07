<?php
$id = $_GET["id"];
if ($id) {
include("connect.php");
$sqldelete = "DELETE from posts where id = $id";
if (mysqli_query($conn, $sqldelete)) {
    session_start();
    $_SESSION["create"] = "Post deleted successfully";
    header("Location:index.php");
}
else{
    die("Something went wrong, The data is not deleted.");
}
}
else{
    echo "Post is not found.";
}
?>