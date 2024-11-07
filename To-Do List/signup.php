<?php

$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include "Partials/_connect.php";
  $usernm = $_POST["username"];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpassword"];

  // Check whether given username is exist or not
  $exitSql = "SELECT * from `listSignup123` where `usernm` = '$usernm'";
  $result = mysqli_query($conn, $exitSql);
  $num = mysqli_num_rows($result);

  if ($num > 0) {
    $showError = "Username Already Exists.";
  }
  
  else{
  // Check whether given password is match or not
  if (($pass == $cpass)) {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `listSignup123` (`usernm`, `passwd`, `dt`) VALUES ('$usernm', '$hash',current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
    }
  }
  else{
    $showError = "Passwords do not match.";
  }
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakeNotes - Signup</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body>

    <?php
    include("Partials/_nav.php");
    ?>

    <?php

    if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your account is successfully created and now you can login.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          </div>';
    }

    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Warning!</strong> ' . $showError . '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          </div>';
    }

    ?>

    <div class="container mt-3 col-md-6 fs-5">
        <form action="/To-Do List/signup.php" method="post">
            <h3 class="text-center">Signup to our website</h3>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="cpassword" class="form-control" id="cpassword" name="cpassword" required>
                <div id="cpassword" class="form-text">Make sure to type the same password.</div>
            </div>
            <button type="submit" class="btn btn-primary fs-5" name="signup">Signup</button>
            <button type="reset" class="ml-3 btn btn-primary fs-5">Reset</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>