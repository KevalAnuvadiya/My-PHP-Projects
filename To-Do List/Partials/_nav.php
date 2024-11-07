<?php
if (isset($_SESSION['loggedin'])  &&  $_SESSION['loggedin']==true) {
  $loggedin = true;
}
else{
  $loggedin = false;
}


echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand fw-bolder" href="/To-Do List/home.php">MakeNotes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/To-Do List/home.php">Home</a>
      </li>';

      if (!$loggedin) {
      echo '<li class="nav-item">
        <a class="nav-link" href="/To-Do List/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/To-Do List/signup.php">Signup</a>
      </li>';
    }

      if ($loggedin) {
      echo '<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Welcome Visitor
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/To-Do List/logout.php">Logout</a>
      </div>
    </li>
      </ul>';
    }

    echo '
  </div>
</nav>';
?>