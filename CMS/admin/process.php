<?php
if(isset($_POST["create"])) {
    include("connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlinsert = "INSERT INTO posts(date, title, summary, content) values('$date', '$title', '$summary', '$content')";
    if(mysqli_query($conn, $sqlinsert)){
        session_start();
        $_SESSION["create"] = "Post added successfully.";
        header("Location:index.php");
    }
    else{
        die("Data is not Inserted.");
    }
}
?>


<?php
if(isset($_POST["update"])) {
    include("connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlupdate = "UPDATE posts set title = '$title', summary = '$summary', content = '$content', date = '$date' where id = '$id'";
    if(mysqli_query($conn, $sqlupdate)){
        session_start();
        $_SESSION["create"] = "Post updated successfully.";
        header("Location:index.php");
    }
    else{
        die("Data is not Updated.");
    }
}
?>